<div class="modal fade" id="modalEditarProyecto<?= $proyecto->getCodigo() ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=URL?>proyectos/editar" method="post">
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="number">Código</label>
                                <input type="number" class="form-control" id="number<?= $proyecto->getCodigo() ?>" name="codigo" value="<?= $proyecto->getCodigo() ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contrato">Contrato</label>
                                <select id="contrato<?= $proyecto->getCodigo() ?>" class="form-control" name="contrato">
                                    <?php
                                    foreach ($listaContratos as $contratos) {
                                    ?>
                                        <option value="<?= $contratos->getCodigo() ?>"><?= $contratos->getCodigo() ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre<?= $proyecto->getCodigo() ?>" placeholder="Softbuild 2.0" name="nombre" value="<?= $proyecto->getNombre() ?>">
                        </div>
                        <div class="form-group">
                            <label for="presupuesto">Presupuesto</label>
                            <input type="double" class="form-control" id="presupuesto<?= $proyecto->getCodigo() ?>" placeholder="99.00" name="presupuesto" value="<?= $proyecto->getPresupuesto() ?>">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="fecha">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fecha<?= $proyecto->getCodigo() ?>" value="<?= $proyecto->getPeriodoInicio()?>" name="periodoInicio">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="duracion">Duración</label>
                                <input type="number" class="form-control" id="duracion<?= $proyecto->getCodigo() ?>" value="<?= $proyecto->getDuracion() ?>" name="duracion">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
</div>