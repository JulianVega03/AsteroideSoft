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
                        <h4 class="card-title"> Administración de Proyectos</h4>
                        <div class="card-header-icons">
                            <button class="add" data-toggle="modal" data-target="#modalNuevoProyecto"><i class="fas fa-2x fa-plus fa-lg"></i></button>
                            <button class="edit" data-toggle="modal" data-target="#modalEditar" disabled><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#modalEliminar" disabled><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
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
                                    <th>
                                        Duración
                                    </th>
                                    <th>
                                        Estado
                                    </th>
                                    <th>
                                        Ingresar
                                    </th>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($listProyectos as $proyecto) {
                                    ?>
                                        <tr>
                                            <td><input type="checkbox" class="Proyecto-<?= $proyecto->getCodigo() ?>"></td>
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
                                            <td>
                                                <?= $proyecto->getDuracion() ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($proyecto->getEstado() == "en progreso") {
                                                ?>
                                                    <div class="progress" data-toggle="tooltip" title="En Progreso">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                <?php
                                                } else if ($proyecto->getEstado() == "cancelado") {
                                                ?>
                                                    <div class="progress" data-toggle="tooltip" title="Cancelado">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                <?php
                                                } else if ($proyecto->getEstado() == "detenido") {
                                                ?>
                                                    <div class="progress" data-toggle="tooltip" title="Detenido">
                                                        <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div class="progress" data-toggle="tooltip" title="Atrasado">
                                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <a type="button" href="" class="btn btn-primary">Acceder</a>
                                            </td>
                                        </tr>

                                        <!-- Modal Delete-->
                                        <?php include 'views/gerente/proyectos/eliminar.php'; ?>

                                        <!-- Modal Edit-->
                                        <?php include 'views/gerente/proyectos/editar.php'; ?>

                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Estados de un Proyecto</h4>
                    </div>
                    <div class="card-body text-center pb-5 pt-5 pl-5 pr-5">
                        <div class="row">
                            <div class="col-md-3">
                                En progreso
                                <br>
                                <hr>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-3">
                                Detenido
                                <br>
                                <hr>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-3">
                                Atrasado
                                <br>
                                <hr>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-3">
                                Cancelado
                                <br>
                                <hr>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal New Project -->
        <?php require_once 'views/gerente/proyectos/nuevo.php'; ?>

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
                    <form action="<?= URL ?>proyectos/eliminar/" method="get" class="form-eliminar-varios">
                        <div class="modal-body text-center">
                            <p class="text-eliminar">¿Estas Seguro de Eliminar Estos Proyectos?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-danger">Confirmar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




    </div>
    
    <script>
        $(document).ready(function() {
            var activo = "contratos";
            console.log("este :  " + activo);
            var elemento = document.querySelector("#" + activo);
            elemento.addClass('active');
        });
    </script>
    <?php require_once 'views/gerente/templates/footer.php'; ?>
</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>