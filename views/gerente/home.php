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
                        <h4 class="card-title"> Mis Proyectos</h4>
                        <div class="card-header-icons">
                            <button class="add" data-toggle="modal" data-target="#modelNuevoProyecto"><i class="fas fa-2x fa-plus fa-lg"></i></button>
                            <button class="edit"><i class="fas fa-2x fa-edit fa-lg"></i></button>
                            <button class="delete"><i class="fas fa-2x fa-trash fa-lg"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>

                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Fecha Inicio
                                    </th>
                                    <th>
                                        Presupuesto
                                    </th>
                                    <th class="text-right">
                                        Duración
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><input type="checkbox" class="form-control"></td>
                                        <td>
                                            Dakota Rice
                                        </td>
                                        <td>
                                            Niger
                                        </td>
                                        <td>
                                            Oud-Turnhout
                                        </td>
                                        <td class="text-right">
                                            $36,738
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-control"></td>
                                        <td>
                                            Minerva Hooper
                                        </td>
                                        <td>
                                            Curaçao
                                        </td>
                                        <td>
                                            Sinaai-Waas
                                        </td>
                                        <td class="text-right">
                                            $23,789
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-control"></td>
                                        <td>
                                            Sage Rodriguez
                                        </td>
                                        <td>
                                            Netherlands
                                        </td>
                                        <td>
                                            Baileux
                                        </td>
                                        <td class="text-right">
                                            $56,142
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-control"></td>
                                        <td>
                                            Philip Chaney
                                        </td>
                                        <td>
                                            Korea, South
                                        </td>
                                        <td>
                                            Overland Park
                                        </td>
                                        <td class="text-right">
                                            $38,735
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-control"></td>
                                        <td>
                                            Doris Greene
                                        </td>
                                        <td>
                                            Malawi
                                        </td>
                                        <td>
                                            Feldkirchen in Kärnten
                                        </td>
                                        <td class="text-right">
                                            $63,542
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-control"></td>
                                        <td>
                                            Mason Porter
                                        </td>
                                        <td>
                                            Chile
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $78,615
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" class="form-control"></td>
                                        <td>
                                            Jon Porter
                                        </td>
                                        <td>
                                            Portugal
                                        </td>
                                        <td>
                                            Gloucester
                                        </td>
                                        <td class="text-right">
                                            $98,615
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modelNuevoProyecto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo Proyecto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="card-body">

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
                                    <label for="presupuesto">Presupuesto</label>
                                    <input type="double" class="form-control" id="presupuesto" placeholder="99.00">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-7">
                                        <label for="fecha">Fecha Inicio</label>
                                        <input type="date" class="form-control" id="fecha">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="duracion">Duración</label>
                                        <input type="number" class="form-control" id="duracion">
                                    </div>
                                </div>
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




        <div class="row">
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Space</h5>
                        <p class="card-category">24 Hours performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id=chartHours width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header ">
                        <h5 class="card-title">Email Statistics</h5>
                        <p class="card-category">Last Campaign Performance</p>
                    </div>
                    <div class="card-body ">
                        <canvas id="chartEmail"></canvas>
                    </div>
                    <div class="card-footer ">
                        <div class="legend">
                            <i class="fa fa-circle text-primary"></i> Opened
                            <i class="fa fa-circle text-warning"></i> Read
                            <i class="fa fa-circle text-danger"></i> Deleted
                            <i class="fa fa-circle text-gray"></i> Unopened
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-calendar"></i> Number of emails sent
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card card-chart">
                    <div class="card-header">
                        <h5 class="card-title">NASDAQ: AAPL</h5>
                        <p class="card-category">Line Chart with Points</p>
                    </div>
                    <div class="card-body">
                        <canvas id="speedChart" width="400" height="100"></canvas>
                    </div>
                    <div class="card-footer">
                        <div class="chart-legend">
                            <i class="fa fa-circle text-info"></i> Tesla Model S
                            <i class="fa fa-circle text-warning"></i> BMW 5 Series
                        </div>
                        <hr />
                        <div class="card-stats">
                            <i class="fa fa-check"></i> Data information certified
                            <a href="<?= URL ?>home/registrarProyecto">Registrar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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