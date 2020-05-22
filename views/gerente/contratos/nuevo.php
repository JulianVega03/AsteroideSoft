<div class="modal fade" id="ContratoNuevo" tabindex="-1" role="dialog" aria-labelledby="ContratoNuevo" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear contrato</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>"
      <div class="modal-body">
          <form action="" method="post">
            <div class="form-row">
               <div class="form-group col-md-4">
               <label for="codigo">Código del contrato</label>
               <input type="number" min="0" class="form-control" id="codigo" name="codigo">
               </div>
               <div class="form-group col-md-4">
                 <label for="tipoContrato">Tipo de contrato</label>
                 <select name="tipo" id="tipoContrato" class="form-control">
                 <?php
                 foreach($listTipoContrato as $tipoContrato){
                 ?>
                 <option value="<?= $tipoContrato->getId()?>">
                 <?= $tipoContrato->getId()?>
                 </option>
                 <?php
                 }
                 ?>
                 </select>
               </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="personas">Persona Responsable</label>
                  <select name="persona" id="personas" class="form-control">
                    <option value="">Angel</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label for="fecha">Fecha de firma</label>
                  <input type="date" class="form-control" name="fecha_firma" id="fecha">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                  <label for="valor">Valor del contrato</label>
                  <input type="number" class="form-control" min="0" id="valor" name="valor">
                </div>
            </div>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Crear</button>
      </div>
    </div>
  </div>
</div>