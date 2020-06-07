<?php require_once 'views/gerente/templates/header.php'; ?>
<?php require_once 'views/gerente/templates/aside.php'; ?>

<div class="main-panel">
    <!-- Navbar -->
    <?php require_once 'views/gerente/templates/navbar.php'; ?>
    <!-- End Navbar -->
    <div class="content">
        <!--Botones CRUD-->
        <div class="row">
            <div class="col-md-12">
                <!--Creacioń card-->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Gestión de Contratos </h4>
                        <div class="card-header-icons">
                            <button class="add" data-toggle="modal" data-target="#ContratoNuevo"><i class="fas fa-2x fa-plus fa-lg"></i></button>
                            <button class="edit" data-toggle="modal" data-target="#modalEditar"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#modalEliminar"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <!--Creación de la tabla de contratos-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="text-primary">
                                    <th></th>
                                    <th>Código</th>
                                    <th>Tipo</th>
                                    <th>Responsable</th>
                                    <th>Fecha</th>
                                    <th>Valor</th>
                                    <th>Estado</th>
                                    <th>PDF</th>
                                </thead>
                                <tbody>
                                    <?php
                                    require_once 'models/PersonaModel.php';
                                    require_once 'models/TipoContratoModel.php';

                                    $tipoContratoModel = new TipoContratoModel();
                                    $personaModel = new PersonaModel();

                                    foreach ($listContratos as $contrato) {
                                    ?>
                                        <tr>
                                            <td><input type="checkbox" class="Contrato-<?= $contrato->getCodigo() ?>"></td>
                                            <td>
                                                <?= $contrato->getCodigo() ?>
                                            </td>
                                            <td>
                                                <?= $tipoContratoModel->ObtenerPorId($contrato->getTipo())->getNombre() ?>
                                            </td>
                                            <td>
                                                <?php
                                                $responsable = $personaModel->ObtenerPorId($contrato->getPersona());
                                                echo $responsable->getNombre() . " " . $responsable->getApellido();
                                                ?>
                                            </td>
                                            <td>
                                                <?= $contrato->getFechaFirma() ?>
                                            </td>
                                            <td>
                                                <?= $contrato->getValor() ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($contrato->getEstado() == "vigente") {
                                                ?>
                                                    <div class="progress" data-toggle="tooltip" title="Vigente">
                                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                <?php
                                                } else if ($contrato->getEstado() == "vencido") {
                                                ?>
                                                    <div class="progress" data-toggle="tooltip" title="Vencido">
                                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                <?php
                                                }

                                                ?>
                                            </td>
                                            <td>
                                                <a href="<?=URL?>contratos/pdf/<?= $contrato->getCodigo() ?>" class="btn btn-info">Descargar</a>
                                            </td>
                                        </tr>
                                        <!-- Modal Delete-->
                                        <?php include 'views/gerente/contratos/eliminar.php'; ?>

                                        <!-- Modal Edit-->
                                        <?php include 'views/gerente/contratos/editar.php'; ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!---->
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Descripción de Estados</h4>
                    </div>
                    <div class="card-body text-center pb-5 pt-5 pl-5 pr-5">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-3">
                                <h5>Vigente</h5>
                                <br>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <h5>Vencido</h5>
                                <br>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <br>
                            </div>
                            <div class="col-md-2"></div>
                        </div>

                    </div>
                </div>
                <!-- Modal New-->
                <?php require_once 'views/gerente/contratos/nuevo.php'; ?>

                <!-- Modal - Eliminar varios al tiempo  -->
                <div class="modal fade" id="modalEliminarVarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Eliminar Contratos</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= URL ?>contratos/eliminar/" method="get" class="form-eliminar-varios">
                                <div class="modal-body text-center">
                                    <p class="text-eliminar">¿Estas Seguro de Eliminar Estos Contratos?</p>
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
        </div>
        <!--Fin de botones CRUD-->


        <!--Fin de la tabla para listar los contratos-->

    </div>

    <?php require_once 'views/gerente/templates/footer.php'; ?>
</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>