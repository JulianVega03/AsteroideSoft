<div class="modal fade" id="modalEditarEntregable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Entregable</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=URL?>proyectos/editar" method="post">
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-row">
                        
                            <div class="form-group col-md-6">
                                <label for="proyecto">Proyecto</label>
                                <input type="double" class="form-control" id="proyecto" placeholder="Proyecto X" name="proyecto" value="Proyecto X" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Entregable 1" name="nombre" value="Entregable 1">
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea type="text" class="form-control" id="descripcion" placeholder="" name="descripcion" value="Descripcion ... "  maxlength="120"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="costo">Costo</label>
                                <input type="double" class="form-control" id="costo" value="1200" name="costo">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="duracion">Duración</label>
                                <input type="number" class="form-control" id="duracion" value="12" name="duracion">
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