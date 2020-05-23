<div class="modal fade" id="ContratoNuevo" tabindex="-1" role="dialog" aria-labelledby="ContratoNuevo" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= URL ?>contratos/nuevo/" method="post">
        <div class="modal-body">
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="codigo">Código del contrato</label>
              <input type="number" min="0" class="form-control" id="codigo" name="codigo"  required>
            </div>
            <div class="form-group col-md-6">
              <label for="tipoContrato">Tipo de contrato</label>
              <select name="tipo_contrato" id="tipoContrato" class="form-control" required>
                <?php
                foreach ($listTipoContrato as $tipoContrato) {
                ?>
                  <option value="<?= $tipoContrato->getId() ?>">
                    <?= $tipoContrato->getNombre() ?>
                  </option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="valor">Valor del contrato</label>
              <input type="number" class="form-control" min="0" id="valor" name="valor" required>
            </div>

            <div class="form-group col-md-6">
              <label for="fecha">Fecha de firma</label>
              <input type="date" class="form-control" name="fecha_firma" id="fecha" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <label for="personas">Persona Responsable</label>
              <select name="persona" id="personas" class="form-control" required>
                <?php
                foreach ($listPersonas as $persona) {
                ?>
                  <option value="<?= $persona->getDocumento() ?>">
                    <?= $persona->getNombre() ?> <?= $persona->getApellido() ?>
                  </option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
      </form>
    </div>
  </div>
</div>