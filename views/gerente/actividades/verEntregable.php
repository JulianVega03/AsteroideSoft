<?php require_once 'views/gerente/templates/header.php'; ?>
<?php require_once 'views/gerente/templates/aside.php'; ?>
<div class="main-panel">
    <!-- Navbar -->
    <?php require_once 'views/gerente/templates/navbar.php'; ?>
    <!-- End Navbar -->

    <div class="content">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">
                            <?php
                            require_once 'models/EntregableModel.php';
                            $eModel = new EntregableModel();
                            ?>
                           <strong>Entregable: </strong> <?=$eModel->obtenerById(str_replace("actividades/ver/", "", $_GET['url']))->getNombre();?>
                        </h4>
                        <div class="card-header-icons">
                            <button class="indentar"><i class="fas fa-indent fa-2x fa-lg"></i></button></a>
                            <button class="desindentar"><i class="fas fa-2x fa-outdent fa-lg"></i></button>
                            <button class="eliminar"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="dropdown ml-auto mr-3">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Insertar
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item filaA">Insertar Arriba</a>
                            <a class="dropdown-item filaD">Insertar Debajo</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table verEntregable">
                                <thead class=" text-primary">
                                    <th class="cin">Nombre</th>
                                    <th class="diez">Duración</th>
                                    <th class="vein">Fecha Inicio</th>
                                    <th class="vein">Fecha Fin</th>
                                </thead>
                                <tbody>

                                    <tr class="entregable">
                                        <td class="cin"><input type="text" value="Documento Alcance Global"></td>
                                        <td class="diez"><input type="text" value="12"></td>
                                        <td class="vein"><input type="date"></td>
                                        <td class="vein"><input type="date"></td>
                                    </tr>
                                    <tr class="etapa">
                                        <td class="cin"><input type="text" value="Análisis"></td>
                                        <td class="diez"><input type="text" value="4"></td>
                                        <td class="vein"><input type="date"></td>
                                        <td class="vein"><input type="date"></td>
                                    </tr>
                                    <tr class="actividad">
                                        <td class="cin"><input type="text" value="Comprar leche"></td>
                                        <td class="diez"><input type="text" value="1"></td>
                                        <td class="vein"><input type="date"></td>
                                        <td class="vein"><input type="date"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'views/gerente/templates/footer.php'; ?>

    <script>
        inicalizar();

        function inicalizar() {
            $('tbody tr td').click(seleccionar);
        }

        document.querySelector('.indentar').addEventListener('click', indentar);
        document.querySelector('.desindentar').addEventListener('click', desindentar);
        document.querySelector('.filaA').addEventListener('click', insertar);
        document.querySelector('.filaD').addEventListener('click', insertarDebajo);
        document.querySelector('.eliminar').addEventListener('click', eliminar);

        let tabla = document.querySelector('tbody');
        let index;

        function seleccionar() {
            index = $(this).parent('tr').index();
            if (index == 0) {
                document.querySelector('.filaA').classList.add('disabled');
            } else if (index > 0) {
                document.querySelector('.filaA').classList.remove('disabled');
            }
        }

        function indentar() {
            if (index == 0) {
                alert('No se puede realizar esta acción');
            } else if ($('table > tbody > tr').eq(index)[0].className == 'entregable') {
                $('table > tbody > tr').eq(index)[0].className = 'etapa';
            } else if ($('table > tbody > tr').eq(index)[0].className == 'etapa') {
                if ($('table > tbody > tr').eq(index - 1)[0].className == 'entregable') {
                    alert('No se puede realizar esta acción');
                } else {
                    $('table > tbody > tr').eq(index)[0].className = 'actividad';
                }
            } else {
                alert('No se puede realizar esta acción');
            }
        }

        function desindentar() {
            if (index == 0) {
                alert('No se puede realizar esta acción');
            } else if ($('table > tbody > tr').eq(index)[0].className == 'entregable') {
                alert('No se puede realizar esta acción');
            } else if ($('table > tbody > tr').eq(index)[0].className == 'etapa') {
                if ($('table tr').length - 2 != index) {
                    if ($('table > tbody > tr').eq(index + 1)[0].className == 'actividad') {
                        alert('No se puede realizar esta acción');
                    } else {
                        $('table > tbody > tr').eq(index)[0].className = 'entregable';
                    }
                } else {
                    $('table > tbody > tr').eq(index)[0].className = 'entregable';
                }
            } else {
                $('table > tbody > tr').eq(index)[0].className = 'etapa';
            }
        }

        function insertar() {
            // index = index - 1;
            $('table > tbody > tr').eq(index - 1).after(crearFila);

            inicalizar();
            evaluar();
        }

        function insertarDebajo() {
            $('table > tbody > tr').eq(index).after(crearFila);
            index = index + 1;

            inicalizar();
            evaluarD();
        }

        function evaluar() {
            if ($('table > tbody > tr').eq(index + 1)[0].className == 'etapa') {
                $('table > tbody > tr').eq(index)[0].className = 'etapa';
            } else {
                $('table > tbody > tr').eq(index)[0].className = 'actividad';
            }
        }

        function evaluarD() {
            if ($('table > tbody > tr').eq(index - 1)[0].className == 'entregable') {
                $('table > tbody > tr').eq(index)[0].className = 'etapa';
            } else {
                $('table > tbody > tr').eq(index)[0].className = 'actividad';
            }
        }

        function crearFila() {
            let elemento = document.createElement('TR');

            elemento.innerHTML = `<td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="date"></td>
                <td><input type="date"></td>`

            return elemento;
        }

        function eliminar() {
            if ($('table > tbody > tr').eq(index)[0].className == 'entregable') {
                alert('No se puede realizar esta acción');
            } else {
                $('table > tbody > tr').eq(index)[0].remove();
            }
        }
    </script>

</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>