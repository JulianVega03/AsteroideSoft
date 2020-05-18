<?php
require_once 'views/gerente/includes/header.php';
?>

<div class="container text-center">
    <h1 class="d-flex justify-content-center mt-5"> Home</h1>
    <?php
    ?>
    <h6>Diseñar un home para la aplicación</h6>
    <br>
    <a href="<?=URL?>home/contrato" class="btn btn-primary">Contrato</a> 
    <a href="" class="btn btn-primary">Reportes</a>
    <a href="" class="btn btn-primary">Personal</a>
    <a href="<?=URL?>home/proyecto" class="btn btn-primary">Proyectos</a>
    <a href="" class="btn btn-primary">Estadisticas</a>
</div>

<?php
require_once 'views/gerente/includes/footer.php';
?>