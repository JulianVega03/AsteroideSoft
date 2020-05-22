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
                        <h4 class="card-title" id="perra"> registrar personas</h4>
                        <div class="card-header-icons">
                            <button class="add" data-toggle="modal" data-target="#modalNuevoProyecto"><i class="fas fa-2x fa-plus fa-lg"></i></button>
                            <button class="edit" data-toggle="modal" data-target="#modalEditarProyecto"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete" data-toggle="modal" data-target="#modalEliminarProyecto"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                <div class="card-body">
                    <form  class="formulario" action="" >
                        <label for="">TIPO DE PERSONA</label> 
                            <select name="select">
                                 <option value="value1" selected>PERSONA NATURAL</option> 
                                <option value="value2" >EMPLEADO</option>
                            </select>
                        <label for=""> <p>Nombre</p></label>
                        <input type="text">
                        <label for=""><p>Apellido</p></label>
                        <input type="text">
                        <label for="">Tipo de documento</label>
                            <select name="select">
                                <option value="value1" selected>C.C-Cedula</option> 
                                <option value="value2" >PA-Pasaporte</option>
                            </select>
                        <label for="">Email</label>
                        <input type="email" name="" id="">
                        <label for="">Telefono</label>
                        <input type="text">
                        <label for="">Direccion</label>
                        <input type="text">
                        </form>
                        <button style="background-color: #6dd5ed">REGISTRAR</button>

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
.formulario{
    display:flex;
    flex-direction:column;
    text-align:center;
}
</style>