<?php require_once 'views/gerente/templates/header.php'; ?>
<?php require_once 'views/gerente/templates/aside.php'; ?>

<div class="main-panel">

  <?php require_once 'views/gerente/templates/navbar.php'; ?>

  <div class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card registrar-proyecto">
          <div class="card-header">
            <h4 class="card-title"> Registrar Proyecto</h4>
          </div>
          <div class="card-body">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="number">Código</label>
                  <input type="number" class="form-control" id="number">
                </div>
                <div class="form-group col-md-6">
                  <label for="contrato">Contrato</label>
                  <select id="contrato" class="form-control">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="increible proyecto">
              </div>
              <div class="form-group">
                <label for="presupuesto">presupuesto</label>
                <input type="double" class="form-control" id="presupuesto" placeholder="99.00">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="fecha">fecha</label>
                  <input type="date" class="form-control" id="fecha">
                </div>

                <div class="form-group col-md-2">
                  <label for="duracion">Duración</label>
                  <input type="number" class="form-control" id="duracion">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Crear</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php require_once 'views/gerente/templates/footer.php'; ?>

</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>