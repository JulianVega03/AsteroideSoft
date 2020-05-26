<?php require_once 'views/gerente/templates/header.php'; ?>
<?php require_once 'views/gerente/templates/aside.php'; ?>
<div class="main-panel">
    <!-- Navbar -->
    <?php require_once 'views/gerente/templates/navbar.php'; ?>
    <!-- End Navbar -->
    <div class="content">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="perra"> registrar persona</h4>
                       
                    </div>

            <div class="card-body">

                  <form id="form1"  class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label >Tipo de documento</label>
                                <select class="form-control" id="tipodocumento_persona" requiered>
                                            <option>C.C-Cedula</option>
                                            <option>P.A-Pasaporte</option>
                                            
                                </select>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>    
                            </div>
                            <div class="col-md-5 mb-3">
                                <label >Documento</label>
                                <input type="text" class="form-control" id="documento_persona"   required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>   
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col-md-5 mb-3">
                                <label>Nombre</label>
                                <input  type="text" class="form-control" id="nombre_persona"   required>
                                <div class="valid-feedback">¡Ok válido!</div>
                                <div class="invalid-feedback">Complete el campo.</div>    
                            </div>
                            <div class="col-md-5 mb-3">
                               <label >Apellido</label>
                               <input  type="text" class="form-control" id="apellido_persona"  required>
                               <div class="valid-feedback">¡Ok válido!</div>
                               <div class="invalid-feedback">Complete el campo.</div>   
                           </div>
                       </div>

                       <div class="form-row">
                           <div class="col-md-5 mb-3">
                              <label>Email</label>
                              <input  type="mail" class="form-control" id="email_persona"   required>
                              <div class="valid-feedback">¡Ok válido!</div>
                              <div class="invalid-feedback">Complete el campo.</div>    
                           </div>
                           <div class="col-md-5 mb-3">
                               <label >Direccion</label>
                               <input  type="text" class="form-control" id="direccion_persona"  required>
                               <div class="valid-feedback">¡Ok válido!</div>
                               <div class="invalid-feedback">Complete el campo.</div>   
                           </div>
                       </div>

                      <div class="form-row">
                           <div class="col-md-5 mb-3">
                               <label >Telefono</label>
                               <input  type="text" class="form-control" id="telefono_persona"   required>
                               <div class="valid-feedback">¡Ok válido!</div>
                               <div class="invalid-feedback">Complete el campo.</div>   
                            </div>
                            
                          <div class="col-md-5 mb-3">
                               <label for="">¿Es empleado?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" onclick= mostrarCargo()  name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                   <label class="form-check-label" for="inlineRadio1">Si!</label>
                                </div>
                                
                               <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" onclick= ocultarCargo()  name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                 <label class="form-check-label" for="inlineRadio2">No!</label>
                                </div>

                            </div>
                            
                        </div>

                        <div  id="cargo" class="form-row">
                            <div class="col-md-5 mb-3">
                                <label for="exampleFormControlSelect1">Cargo del empleado</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Documentador</option>
                                    <option>Desarrollador Senior</option>
                                    <option>Desarrollador Junior</option>
                                    <option>DBA</option>
                                    <option>Analista de sistemas</option>
                                </select>
                            </div>
                        </div>
                  
                        <button class="btn btn-primary" type="submit">Enviar Registro</button>
                </form>
                <button id="btn" class="btn btn-primary" onclick= mostrarTabla() type="">Mostrar tabla </button>
                <button id="btn" class="btn btn-primary" onclick= ocultarTabla() type="">Ocultar tabla </button>
                   
                    <div   id="tablatabla" class="contenedor-tabla">
                    
                        <table  class="table table-sm">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nombre</th>
                                  <th scope="col">Apellido</th>
                                  <th scope="col">correo</th>
                               </tr>
                            </thead>
                            <tbody>
                               <tr>
                                 <th scope="row">1</th>
                                 <td>Jhonatan Andres</td>
                                 <td>Beltran Caceres</td>
                                 <td>jhonatanandres@gmail.com</td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>juan ricardo</td>
                                 <td>jimenez martinez</td>
                                 <td>juanricardo@hotmail.com</td>
                             </tr>
                             <tr>
                                 <th scope="row">2</th>
                                 <td>maria jose</td>
                                 <td>quintero jaimes</td>
                                 <td>mariajose@hotmail.com</td>
                             </tr>
                              
                         </tbody>
                      </table>
                       
                
                </div>
                
                
            </div>
        </div>

        <!-- Modal New-->
        <?php require_once 'views/gerente/proyectos/nuevo.php'; ?>


    </div>
    
    <?php require_once 'views/gerente/templates/footer.php'; ?>

   
</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>





<style>
.contenedor-tabla{
    
    background-color:#A0D3E7;
    height: auto ;
    width:  100%;
}
#tablatabla{
    display: none;
}

.table-sm{
    border-style: solid; border-width: 1px;
}

#cargo{
    display: none;
}
</style>

<script>
function mostrarCargo() {
    document.getElementById('cargo').style.display = 'block';  
}

function ocultarCargo() {
    document.getElementById('cargo').style.display = 'none';  
}

function mostrarTabla() {
    document.getElementById('tablatabla').style.display = 'block';  
}

function ocultarTabla() {
    document.getElementById('tablatabla').style.display = 'none';  
}
</script>




<script>
    (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
    </script>



