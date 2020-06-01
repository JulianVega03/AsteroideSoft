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
                            $pm = new ProyectoModel();
                            ?>

                            <strong style="font-family: 'roboto'">Proyecto: </strong><?= $pm->obtenerPorId(str_replace('entregables/', '', $_GET['url']))->getNombre() ?></h4>
                        <div class="card-header-icons">
                            <a href="<?= URL ?>actividades/ver/" class="viewEntregable hide"><button><i class="fas fa-2x fa-eye fa-lg"></i></button></a>
                            <button class="editEntregable hide" data-toggle="modal" data-target="#modalEditarEntregable"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="deleteEntregable hide" data-toggle="modal" data-target="#modalEliminarEntregable"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-flex">
                            <div class="card__grilla">
                                <div class="card__grilla-elemento plus"><button class="add" data-toggle="modal" data-target="#modalAñadirEntregable"><i class="fas fa-plus"></i></button></div>

                                <?php
                                $i=1;
                                foreach ($entregables as $entregable) {
                                    
                                ?>

                                    <div class="card__grilla-elemento text-center" data-edit="#modalEntregable<?= $entregable->getId() ?>">
                                        <div class="circle">E<?=$i++?></div>
                                        <div class="porcentaje"><?= $entregable->getNombre() ?></div>
                                    </div>

                                    <!-- Modal Edit-->
                                    <?php include 'views/gerente/entregables/editar.php'; ?>
                                    <!-- Modal Delete -->
                                    <?php include 'views/gerente/entregables/eliminar.php'; ?>

                                <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Integrantes del Proyecto</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body__flex">
                            <div class="form-group col-md-4">
                                <div>
                                    <label for="buscar">Buscar Empleado</label>
                                    <input type="double" class="form-control" id="buscar">
                                </div>
                            </div>
                            <div class="card-header-icons">
                                <button class="btn btn-primary" data-toggle="modal" data-target="#agregarEmpleados">Agregar Empleados</button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table text-center tabla">
                                <thead class=" text-primary">
                                    <th>

                                    </th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Documento</th>
                                    <th>Correo</th>
                                    <th>Cargo</th>
                                    <th>Acción</th>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once 'models/EmpleadoModel.php';
                                    $eModel = new EmpleadoModel();
                                    require_once 'models/CargoEmpleadoModel.php';
                                    require_once 'models/CargoModel.php';
                                    $cModel = new CargoModel();
                                    
                                    $CargoEmpModel = new CargoEmpleadoModel();
                                    foreach ($integrantes as $persona) {


                                    ?>
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td><?= $eModel->obtenerById($persona->getDocumento())->getCodigo() ?></td>
                                            <td><?= $persona->getNombre() ?></td>
                                            <td><?= $persona->getApellido() ?></td>
                                            <td><?= $persona->getDocumento() ?></td>
                                            <td><?= $persona->getCorreo() ?></td>
                                            <td><?= $cModel->obtenerById($CargoEmpModel->obtenerCargoPorId($persona->getDocumento())['cargo'])['nombre'] ?></td>
                                            <td>
                                                <a href="<?= URL ?>proyectos/desvincularIntegrante/<?= $persona->getDocumento() ?>/<?= str_replace('entregables/', '', $_GET['url']) ?>"><button type="button" class="btn btn-danger">Eliminar</button></a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal New-->
    <?php require_once 'views/gerente/entregables/nuevo.php'; ?>

    <!-- Modal - Eliminar varios al tiempo  -->
    <div class="modal fade" id="modalEliminarVarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Proyecto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="get" class="form-eliminar-varios">
                    <div class="modal-body text-center">
                        <p class="text-eliminar">¿Estas Seguro de Eliminar Estos Entregables?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger">Confirmar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Agregar Empleados -->
    <?php require_once 'agregarEmpleados.php'; ?>

    <?php require_once 'views/gerente/templates/footer.php'; ?>



    <script>
        // $('.addEmp').prop("disabled", true);

        function select() {
            if (!this.classList.contains('plus')) {
                this.classList.toggle('card__grilla-elemento-select');
                console.log('agregando clase')
                actualizarBotones();
            }
        }

        function actualizarBotones() {



            var seleccionados = $('.card__grilla-elemento-select');
            if (seleccionados.length == 0) {
                document.querySelector('.viewEntregable').classList.add('hide');
                document.querySelector('.editEntregable').classList.add('hide');
                document.querySelector('.deleteEntregable').classList.add('hide');
            } else if (seleccionados.length == 1) {
                document.querySelector('.viewEntregable').classList.remove('hide');
                document.querySelector('.editEntregable').classList.remove('hide');
                document.querySelector('.deleteEntregable').classList.remove('hide');


                var elementoSelected = document.querySelector(".card__grilla-elemento-select").getAttribute('data-edit');
                var ver = elementoSelected.replace("#modalEntregable", "");

                document.querySelector(".viewEntregable").setAttribute('href', "<?= URL ?>actividades/ver/" + ver);
                document.querySelector(".editEntregable").setAttribute('data-target', elementoSelected + "-editar");
                document.querySelector(".deleteEntregable").setAttribute('data-target', elementoSelected + "-eliminar");

            } else {
                document.querySelector('.viewEntregable').classList.add('hide');
                document.querySelector('.editEntregable').classList.add('hide');
                document.querySelector('.deleteEntregable').classList.remove('hide');


                seleccionados = document.querySelectorAll('.card__grilla-elemento-select');

                var action = "<?= URL ?>entregables/eliminar";

                for (const element of seleccionados) {
                    lista = element.getAttribute('data-edit');
                    lista = lista.replace("#modalEntregable", "/");
                    action += lista;
                }

                document.querySelector(".form-eliminar-varios").setAttribute("action", action);

                var buttonDelete = document.querySelector(".deleteEntregable").setAttribute("data-target", "#modalEliminarVarios");

            }
        }
        var elementos = document.querySelectorAll('.card__grilla-elemento');
        elementos.forEach(elemento => elemento.addEventListener('click', select));

        document.querySelector("#buscar").onkeyup = function() {
            $TableFilter(".tabla", this.value);
        }

        $TableFilter = function(id, value) {
            var rows = document.querySelectorAll(id + ' tbody tr');

            for (var i = 0; i < rows.length; i++) {
                var showRow = false;

                var row = rows[i];
                row.style.display = 'none';

                for (var x = 0; x < row.childElementCount; x++) {
                    if (row.children[x].textContent.toLowerCase().indexOf(value.toLowerCase().trim()) > -1) {
                        showRow = true;
                        break;
                    }
                }

                if (showRow) {
                    row.style.display = null;
                }
            }
        }

        var checks = $(':checkbox');
        for (const check of checks) {
            check.addEventListener('click', actualizarEmp);
        }

        function actualizarEmp() {
            var checks = $('tbody > tr > td > :checked');
            if (checks.length > 1) {
                $('.addEmp').prop("disabled", false);
            } else {
                $('.addEmp').prop("disabled", true);
            }
        }
    </script>
</div>

<?php require_once 'views/gerente/templates/scripts.php'; ?>