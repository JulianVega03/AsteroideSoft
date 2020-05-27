<div class="modal fade" id="modalEntregable<?= $entregable->getId() ?>-editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Entregable</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=URL?>entregables/editar" method="post">
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="proyecto">Proyecto</label>
                                <input type="double" class="form-control"  placeholder="Proyecto X" name="proyecto" value="<?= $pm->obtenerPorId(str_replace('entregables/', '', $_GET['url']))->getCodigo() ?>" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="proyecto">ID Entregable</label>
                                <input type="double" class="form-control"  placeholder="Proyecto X" name="id" value="<?= $entregable->getId() ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" placeholder="Entregable 1" name="nombre" value="<?= $entregable->getNombre() ?>">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control"  name="descripcion" value="<?= $entregable->getDescripcion() ?>" ></input>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="costo">Costo</label>
                                <input type="double" class="form-control" value="<?= $entregable->getCosto() ?>" name="costo">
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