<div class="modal fade" id="modalEditarProyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Editar Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="number">Código</label>
                                <input type="number" class="form-control" id="number" value="057">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contrato">Contrato</label>
                                <!-- <select id="contrato" class="form-control">
                                    <option selected value="1">1</option>
                                    <option value="2">2</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Softbuild 2.0">
                        </div>
                        <div class="form-group">
                            <label for="presupuesto">Presupuesto</label>
                            <input type="double" class="form-control" id="presupuesto" placeholder="99.00">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="fecha">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fecha">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="duracion">Duración</label>
                                <input type="number" class="form-control" id="duracion" value="65">
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