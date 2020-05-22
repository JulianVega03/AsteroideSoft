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
                        <h4 class="card-title"> Mis Contratos</h4>
                        <div class="card-header-icons">
                            <button class="add" data-toggle="modal" data-target="#ContratoNuevo"><i class="fas fa-2x fa-plus fa-lg"></i></button>
                            <button class="edit" data-toggle="modal" data-target="#ContratoEditar"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#modalEliminarProyecto"><i class="fas fa-2x fa-trash fa-lg"></i></button>
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
                             <th>Ingresar</th>
                        </thead>
                        <tbody>
                          <?php
                           foreach($listContratos as $contrato){
                             ?>   
                            <tr>
                             <td><input type="checkbox"></td>
                             <td>
                                 <?= $contrato->getCodigo()?>
                             </td>
                             <td>
                             <?= $contrato->getTipo()?>
                             </td>
                             <td>
                             <?= $contrato->getPersona()?>
                             </td>
                             <td>
                             <?= $contrato->getFechaFirma()?>
                             </td>
                             <td>
                             <?= $contrato->getValor()?>
                             </td>
                             <td></td>
                             <td>
                               <button type="button" class="btn btn-primary">Acceder</button>
                             </td>
                            </tr> 
                            <!-- Modal Delete-->
                                 <?php include_once 'views/gerente/contratos/eliminar.php'; ?>

                             <!-- Modal Edit-->
                                 <?php include_once 'views/gerente/contratos/editar.php'; ?>
                            <?php } ?>
                        </tbody>
                    </table>
               </div>
            
            </div>
            <!---->
         </div>
           <!-- Modal New-->
        <?php require_once 'views/gerente/contratos/nuevo.php'; ?>
       </div>
  </div>
 <!--Fin de botones CRUD-->

<!--Tabla para listar los contratos-->
 <div class="row">
 
 
 </div>

<!--Fin de la tabla para listar los contratos-->

</div>
<script>
        $('.edit').prop("disabled", true);
        $('.delete').prop("disabled", true);
        var checks = $(':checkbox');
        for (const check of checks) {
            check.addEventListener('click', actualizar);
        }

        function actualizar() {
            var checks = $('tbody > tr > td > :checked');
            console.log(checks);
            if (checks.length == 0) {
                $('.edit').prop("disabled", true);
                $('.delete').prop("disabled", true);
                $('.add').prop("disabled", false);
            } else if (checks.length == 1) {
                $('.add').prop("disabled", true);
                $('.edit').prop("disabled", false);
                $('.delete').prop("disabled", false);
            } else {
                $('.add').prop("disabled", true);
                $('.edit').prop("disabled", true);
                $('.delete').prop("disabled", false);
            }
        }
    </script>

<?php require_once 'views/gerente/templates/footer.php'; ?>
</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>