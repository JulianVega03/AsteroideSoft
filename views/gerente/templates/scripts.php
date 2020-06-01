</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
Core JS Files

<!--  Google Maps Plugin    -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!-- Chart JS -->

<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= URL ?>public/assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= URL ?>public/assets/demo/demo.js"></script>
<script>
  $('.edit').prop("disabled", true);
  $('.delete').prop("disabled", true);
  var checks = $(':checkbox');

  for (const check of checks) {
    check.addEventListener('click', actualizar);
  }



  function actualizar() {
    var checks = $('#proyectos > tr > td > :checked');
    // console.log(checks);
    if (checks.length == 0) {
      $('.edit').prop("disabled", true);
      $('.delete').prop("disabled", true);
      $('.add').prop("disabled", false);
    } else if (checks.length == 1) {
      $('.add').prop("disabled", true);
      $('.edit').prop("disabled", false);
      $('.delete').prop("disabled", false);

      var selected = checks[0].className;
      var buttonEdit = document.querySelector(".edit");
      var buttonDelete = document.querySelector(".delete");
      buttonEdit.setAttribute("data-target", "#modalEditar" + selected);
      buttonDelete.setAttribute("data-target", "#modalEliminar" + selected);
    } else {
      $('.add').prop("disabled", true);
      $('.edit').prop("disabled", true);
      $('.delete').prop("disabled", false);

      var action = "";

      for (const check of checks) {
        lista = check.className.replace("Proyecto-", "");
        lista = lista.replace("Contrato-", "");
        action = action + lista + "/";
      }
      var formEliminar = document.querySelector(".form-eliminar-varios");
      formEliminar.setAttribute("action", formEliminar.getAttribute('action') + action);

      var buttonDelete = document.querySelector(".delete");
      buttonDelete.setAttribute("data-target", "#modalEliminarVarios");
    }
  }
</script>
<script>
  $(document).ready(function() {
    <?php
    if (isset($estado)) {
      if ($estado == "success") {
    ?>
        Swal.fire({
          icon: 'success',
          title: 'Trabajo realizado con exito',
          showConfirmButton: false,
          timer: 1500
        })
      <?php
      } else if ($estado == "error") {
      ?>
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'ha Ocurrido Un Error!',
          footer: '<a href>Intentalo Nuevamente</a>'
        })
    <?php
      }
    }
    ?>
  });
  $(document).ready(function() {


    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
    demo.initChartsPages();
  });
</script>
<script src="<?= URL ?>public/js/scripts.js" type="text/javascript"></script>
<!-- estadisticas -->
<script type="text/javascript">
  google.charts.load("current", {
    packages: ["corechart"]
  });
  google.charts.load('current', {
    'packages': ['table']
  });

  function drawChart(a, v) {
    var data = new google.visualization.DataTable();
    alert("Se va a crear un gráfico con " + a.length + " Items");
    data.addColumn('string', 'Name');
    data.addColumn('number', 'unidad');
    data.addRows(a.length);
    for (i = 0; i < a.length; i++) {
      data.setCell(i, 0, a[i]);
      data.setCell(i, 1, v[i]);

    }
    var options = {
      title: 'Graficador',
      is3D: true,
    };

    var chart = new google.visualization.BarChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);

  }


  function drawTable(a, v) {

    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Data');
    data.addColumn('number', 'Cantidad');
    data.addRows(a.length);
    for (i = 0; i < a.length; i++) {
      data.setCell(i, 0, a[i]);
      data.setCell(i, 1, v[i]);

    }
    var table = new google.visualization.PieChart(document.getElementById('table_div'));

    table.draw(data, {
      showRowNumber: true,
      width: '100%',
      height: '100%'
    });
  }
</script>
</body>

</html>