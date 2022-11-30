<?php
$id = $_SESSION["sesion_active"]["id_persona"];
$cargoP = $_SESSION["sesion_active"]["tipo_usuario"];
$id_sede=$_SESSION["sesion_active"]["id_sede"];
$login = new LoginControlador();
$datos = $login->DatosUsuario($id);


?>


<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <i class="bi bi-list toggle-sidebar-btn d-sm-block d-lg-none"></i>
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="public/assets/img/logosenaverde.png" alt="">&nbsp;&nbsp;
      <span class="d-sm-none d-none d-lg-block">SUB SEDE MALAMBO</span>
    </a>
    <input type="hidden" name="id_Instructor" id="id_Instructor" value="<?php echo $id; ?>">

  </div>



  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <i class="bi bi-person-circle" style="font-size:30px;"></i>
          <span class="d-none d-md-block dropdown-toggle ps-2">
            <?php
            echo $datos["nombres"] . " " . $datos["apellidos"];
            ?>
          </span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6>
              <?php
              echo $_SESSION["sesion_active"]["tipo_usuario"];
              ?>
            </h6>

          </li>

          <li>
            <hr class="dropdown-divider">
          </li>
          <li>
            <a class="dropdown-item d-flex align-items-center" href="salir">
              <i class="bi bi-box-arrow-right"></i>
              <span>Cerrar Sesion</span>
            </a>
          </li>

        </ul>
      </li>
  </nav>

</header>