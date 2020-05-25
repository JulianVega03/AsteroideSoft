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
                        <h4 class="card-title">Proyecto X</h4>
                        <div class="card-header-icons">
                            <a href="<?=URL?>entregable/ver"><button class="viewEntregable hide" data-toggle="modal" data-target="#modalEditarEntregable"><i class="fas fa-2x fa-eye fa-lg"></i></button></a>
                            <button class="editEntregable hide" data-toggle="modal" data-target="#modalEditarEntregable"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="deleteEntregable hide" data-toggle="modal" data-target="#modalEliminarEntregable"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-flex">
                            <div class="card__grilla">
                                <div class="card__grilla-elemento plus"><button class="add" data-toggle="modal" data-target="#modalAñadirEntregable"><i class="fas fa-plus"></i></button></div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E1</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E2</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E3</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E4</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E3</div>
                                    <div class="porcentaje">15%</div>
                                </div>
                                <div class="card__grilla-elemento">
                                    <div class="circle">E4</div>
                                    <div class="porcentaje">15%</div>
                                </div>
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
                        <h4 class="card-title"> Empleados del Proyecto</h4>
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
                                    <th>Acción</th>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td> 1151563</td>
                                        <td>Eduard</td>
                                        <td>Cantillo</td>
                                        <td>15985645</td>
                                        <td>eduard@gmail.com</td>
                                        <td>
                                            <a href="<?= URL ?>entregable"><button type="button" class="btn btn-danger">Eliminar</button></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td>1151561</td>
                                        <td>Fabián</td>
                                        <td>Gonzales</td>
                                        <td>14685041</td>
                                        <td>fabian@gmail.com</td>
                                        <td>
                                            <a href="<?= URL ?>entregable"><button type="button" class="btn btn-danger">Eliminar</button></a>
                                        </td>
                                    </tr>
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

    <!-- Modal Edit-->
    <?php include_once 'views/gerente/entregables/editar.php'; ?>

    <!-- Modal Delete -->
    <?php include_once 'views/gerente/entregables/eliminar.php'; ?>

    <!-- Agregar Empleados -->
    <?php require_once 'views/gerente/proyectos/agregarEmpleados.php'; ?>

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
            console.log('actualizando')
            var seleccionados = $('.card__grilla-elemento-select');
            if (seleccionados.length == 0) {
                document.querySelector('.viewEntregable').classList.add('hide');
                document.querySelector('.editEntregable').classList.add('hide');
                document.querySelector('.deleteEntregable').classList.add('hide');
            } else if (seleccionados.length == 1) {
                document.querySelector('.viewEntregable').classList.remove('hide');
                document.querySelector('.editEntregable').classList.remove('hide');
                document.querySelector('.deleteEntregable').classList.remove('hide');
            } else {
                document.querySelector('.viewEntregable').classList.add('hide');
                document.querySelector('.editEntregable').classList.add('hide');
                document.querySelector('.deleteEntregable').classList.remove('hide');
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