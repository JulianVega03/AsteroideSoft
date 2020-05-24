<div class="modal fade" id="modalAñadirEntregable" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Entregable</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= URL ?>entregables/nuevo" method="post">
                <div class="modal-body">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea type="text" class="form-control" id="descripcion" placeholder="" name="descripcion" required maxlength="120"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="costo">Costo</label>
                            <input type="double" class="form-control" id="costo" placeholder="" name="costo" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
</div>