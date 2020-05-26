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
                        <div class="card-header-icons">
                            <button class="add" data-toggle="modal" data-target="#modalNuevoProyecto"><i class="fas fa-2x fa-plus fa-lg"></i></button>
                            <button class="edit" data-toggle="modal" data-target="#modalEditarProyecto"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#modalEliminarProyecto"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
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
                               <label >¿Eres Empleado?</label>
                               <input class="" type="checkbox" id="inlineCheckbox1" value="option1" >
                               <label>Si!</label>
                               <input class="" type="checkbox" id="inlineCheckbox2" value="option2" >
                               <label>No!</label>
                            </div>
                       </div>
                  
                        <button class="btn btn-primary" type="submit">Enviar Registro</button>
                </form>
                   
               <div class="contenedor-tabla">
                    <button>Mostrar tabla</button>
                        <div class="tabla">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, voluptas quos eveniet sit, expedita ab magnam fugit itaque veniam ipsum totam corrupti iure adipisci amet eius numquam obcaecati enim repellendus.</p>
                        </div>
                
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
    
    background-color:red;
    height: 400px ;
    width:  100%;
}
.tabla{
    background-color:blue;
    width:  90%;
    height: 300px ;
    margin-left: auto ;
    margin-right: auto;

}

</style>

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