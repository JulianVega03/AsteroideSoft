<div class="sidebar" data-color="white" data-active-color="danger">
  <div class="logo">
    <a href="https://www.creative-tim.com" class="simple-text logo-mini">
      <div class="logo-image-small">
        <img src="<?= URL ?>public/assets/img/logo-small.png">
      </div>
      <!-- <p>CT</p> -->
    </a>
    <a href="#" class="simple-text logo-normal">
      <?= $_SESSION['rol'] ?>
      <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="active" data-active="proyectos entregables actividades">
        <a href="<?= URL ?>proyectos">
          <i class="nc-icon nc-bank"></i>
          <p>Proyectos</p>
        </a>
      </li>
      <li data-active="contratos">
        <a href="<?= URL ?>contratos">
          <i class="nc-icon nc-diamond"></i>
          <p>Contratos</p>
        </a>
      </li>
      <li data-active="persona">
        <a href="<?= URL ?>persona">
          <i class="nc-icon  nc-single-02"></i>
          <p>Personal</p>
        </a>
      </li>
      <li data-active="calendario">
        <a href="<?= URL ?>calendario/">
          <i class="nc-icon nc-tile-56"></i>
          <p>Calendario</p>
        </a>
      </li>
      <li data-active="estadisticas">
        <a href="<?= URL ?>estadisticas/">
          <i class="nc-icon nc-spaceship"></i>
          <p>Estadisticas</p>
        </a>
      </li>
      <li data-active="reportes">
        <a href="<?= URL ?>reportes/">
          <i class="nc-icon nc-bell-55"></i>
          <p>Reportes</p>
        </a>
      </li>


      <li class="active-pro" data-active="asteroide">
        <a href="<?= URL ?>asteroide/">
          <i class="nc-icon nc-pin-3"></i>
          <p>Asteroide Soft S.A</p>
        </a>
      </li>
    </ul>
  </div>
</div>
<script>
  var listaMenu = document.querySelectorAll(".nav > li");
  var cadena = "<?= $_GET['url'] ?>";

  for (let i = 0; i < listaMenu.length; i++) {

    listaMenu[i].setAttribute("class", "");
    if (listaMenu[i].getAttribute("data-active") != null) {
      if (listaMenu[i].getAttribute("data-active").includes(cadena.split("/")[0])) {
        listaMenu[i].setAttribute("class", "active");
      }
    }
  }
</script>