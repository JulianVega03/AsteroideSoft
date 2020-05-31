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
                        <h4 class="card-title"> Estadisticas </h4>
                    </div>
                    <div class="cardbody container">

                        <form action="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for=""> Codigo: </label>
                                    <input type="text" class="form-control" id="codEsta">
                                    <button type="button" class="btn btn-success" onclick="estadisticas()">Generar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class='row col-sm-12'>
                        <div class='col-md-6 mb-6' id='piechart_3d' style='width: 500%; height: 500px;'></div>
                        <div class='col-md-6 mb-6' id='table_div' style='width: 500%; height: 500px;'></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- estadisticas -->
<script>
    function estadisticas() {

        codigo = document.getElementById("codEsta").value;

        datos = ["verde", "auzul", "naranga"];
        valores = [5, 2, 3];

        //  en datos debe ir el objeto y en valores la cantidad ambos deben ser vectores
        draw_chart(datos, valores);
    }

    function draw() {
        drawChart(57);
        google.charts.setOnLoadCallback(drawChart);
    }

    function draw_chart(datos, valores) {
        drawChart(datos, valores);
        drawTable(datos, valores);
        google.charts.setOnLoadCallback(drawChart);
        google.charts.setOnLoadCallback(drawTable);

    }
</script>

<?php require_once 'views/gerente/templates/footer.php'; ?>
</div>
<?php require_once 'views/gerente/templates/scripts.php'; ?>