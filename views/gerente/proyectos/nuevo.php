<div class="modal fade" id="modalNuevoProyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Proyecto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= URL ?>proyectos/nuevo" method="post">
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="number">Código</label>
                                <input type="number" class="form-control" id="number" name="codigo" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="contrato">Contrato</label>
                                <select id="contrato" class="form-control" name="contrato">
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
                            <input type="text" class="form-control" id="nombre" placeholder="" name="nombre" required>
                        </div>
                        <div class="form-group">
                            <label for="presupuesto">Presupuesto</label>
                            <input type="double" class="form-control" id="presupuesto" placeholder="" name="presupuesto" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-7">
                                <label for="fecha">Fecha Inicio</label>
                                <input type="date" class="form-control" id="fecha" name="periodoInicio" required>
                            </div>

                            <div class="form-group col-md-5">
                                <label for="duracion">Duración</label>
                                <input type="number" class="form-control" id="duracion" name="duracion" required>
                            </div>
                        </div>
                        <br>
                        <hr>
                        <!-- NO FUNCIONA AUN -->
                        <div class="form-group col-md-12 ">
                            <label for="">Asignar Lider de Proyecto</label>
                            <select id="lider_proyecto" class="form-control" name="lider">
                                <option value="">Julian Andres Becerra</option>
                                <option value="">Angel Yesid Mondragon</option>
                                <option value="">Frank Jean Gomez</option>
                            </select>
                        </div>
                        <!-- /FIN -->
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