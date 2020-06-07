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
                        <h4 class="card-title"> Reportes de Proyectos</h4>
                    </div>

                    <div class="card-body">
                    <p>Reportes detallados del estado financiero, ejecucion y legal de cada proyecto</p>
                    <br>
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class=" text-primary">
                                    <th>

                                    </th>
                                    <th>
                                        Proyecto
                                    </th>
                                    <th>
                                        Presupuesto
                                    </th>
                                    <th>
                                       Jefe del Proyecto
                                    </th>
                                    <th>
                                        Reportes
                                    </th>
                                </thead>
                                <tbody id="proyectos">
                                    <?php
                                    foreach ($listProyectos as $proyecto) {
                                    ?>
                                        <tr>
                                           <td>
                                               <img src="https://image.flaticon.com/icons/png/512/1342/1342674.png" width="30px" alt="">
                                           </td>
                                            <td>
                                             <?=$proyecto->getNombre()?>
                                            </td> 
                                            <td>
                                               <?=$proyecto->getPresupuesto()?>
                                            </td>
                                            <td>
                                                Julian Andres Becerra Vega
                                            </td>
                                            <td>
                                                <a href="<?=URL?>reportes/pdf"><button type="button" class="btn btn-danger">Descargar</button></a>
                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>


    <?php require_once 'views/gerente/templates/footer.php'; ?>
</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>