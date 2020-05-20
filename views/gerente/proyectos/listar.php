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
                        <h4 class="card-title"> Mis Proyectos</h4>
                        <div class="card-header-icons">
                            <button class="add" data-toggle="modal" data-target="#modalNuevoProyecto"><i class="fas fa-2x fa-plus fa-lg"></i></button>
                            <button class="edit" data-toggle="modal" data-target="#modalEditarProyecto"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#modalEliminarProyecto"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>

                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Fecha Inicio
                                    </th>
                                    <th>
                                        Presupuesto
                                    </th>
                                    <th>
                                        Contrato
                                    </th>
                                    <th class="text-right">
                                        Duración
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listProyectos as $proyecto) {
                                    ?>
                                        <tr>
                                            <td><input type="checkbox" class="form-control"></td>
                                            <td>
                                                <?= $proyecto->getNombre() ?>
                                            </td>
                                            <td>
                                                <?= $proyecto->getPeriodoInicio() ?>
                                            </td>
                                            <td>
                                                <?= $proyecto->getPresupuesto() ?>
                                            </td>
                                            <td>
                                                <?= $proyecto->getContrato() ?>
                                            </td>
                                            <td class="text-right">
                                                <?= $proyecto->getDuracion() ?>
                                            </td>
                                        </tr>

                                        <!-- Modal Delete-->
                                        <?php include_once 'views/gerente/proyectos/eliminar.php'; ?>

                                        <!-- Modal Edit-->
                                        <?php include_once 'views/gerente/proyectos/editar.php'; ?>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal New-->
        <?php require_once 'views/gerente/proyectos/nuevo.php'; ?>


    </div>
    <script>
        $('.edit').prop("disabled", true);
        $('.delete').prop("disabled", true);
        var checks = $(':checkbox');
        for (const check of checks) {
            check.addEventListener('click', actualizar);
        }

        function actualizar() {
            var checks = $('tbody > tr > td > :checked');
            console.log(checks);
            if (checks.length == 0) {
                $('.edit').prop("disabled", true);
                $('.delete').prop("disabled", true);
                $('.add').prop("disabled", false);
            } else if (checks.length == 1) {
                $('.add').prop("disabled", true);
                $('.edit').prop("disabled", false);
                $('.delete').prop("disabled", false);
            } else {
                $('.add').prop("disabled", true);
                $('.edit').prop("disabled", true);
                $('.delete').prop("disabled", false);
            }
        }
    </script>
    <?php require_once 'views/gerente/templates/footer.php'; ?>
</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>