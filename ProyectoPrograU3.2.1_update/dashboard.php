<?php
session_start();

//VALIDACIÓN DE SESION
if(isset($_SESSION['USER'])){
  //MENSAJE DE ESTADO DE SESIÓN: CON SESIÓN

}else{
  //MENSAJE DE ESTADO DE SESIÓN: SIN SESIÓN
 header("location: login.php");
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ESPEDU · Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fontawesome Link CSS -->
<script src="https://kit.fontawesome.com/0fce671442.js" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="estilos.css" rel="stylesheet">
  </head>
  <body>
<!--MENU-->
    <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow">
  <img src="./img/logo.png" width="180">
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>
<!--MENU/FIN-->
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" style="color:#00713d;" href="dashboard.php">
              <i class="fas fa-tachometer-alt"></i>
              Dashboard <span class="sr-only"></span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#333;" href="usuarios2.php">
              <i class="fas fa-clipboard-list"></i>
              Aprobación
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#333;" href="usuarios.php">
              <i class="fas fa-file-invoice"></i>
              Comprobantes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#333;" href="usuarios3.php">
              <i class="fas fa-user-check"></i>
              Aprobados
            </a>
          </li>
          <!--
          <li class="nav-item">
            <a class="nav-link active" style="color:#ff7a38;" href="billetera.php">
              <i class="fas fa-wallet"></i>
              OPCION3
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#fff;" href="pedidos.php">
              <i class="fas fa-list-alt"></i>
              OPCION4
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color:#fff;" href="direcciones.php">
              <i class="fas fa-map-marker-alt"></i>
              OPCION5
            </a>
          </li>
           -->
          <!--
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
          -->
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-tachometer-alt"></i> Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <!--
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>

          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
          -->
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
        <div class="card text-white bg-info mr-3" style="max-width: 18rem;">
          <div class="card-header"><i class="fas fa-user-clock"></i> Pendientes</div>
          <div class="card-body">
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "formulario";
            $con = mysqli_connect($servername, $username, $password, $dbname);

            $sql = "SELECT count(ID_USER) AS total FROM usuario";
            $result = mysqli_query($con, $sql);
            $values = mysqli_fetch_assoc($result);
            $num_rows = $values['total'];
             ?>
            <h1 class="card-title"><?php echo $num_rows ?></h1>
            <p class="card-text justify">Número de usuarios que a llenado el formulario de registro y estan a la espera de ser aprobados.</p>
          </div>
        </div>
        <div class="card text-white bg-success mr-3" style="max-width: 18rem;">
          <div class="card-header"><i class="fas fa-users"></i> Aprobados</div>
          <div class="card-body">
            <h1 class="card-title">?</h1>
            <p class="card-text">Número de usuarios que han sido aprobados luego de subir el comprobante.</p>
          </div>
        </div>
        <div class="card text-white bg-danger mr-3" style="max-width: 18rem;">
          <div class="card-header"><i class="fas fa-users-slash"></i> Rechazados</div>
          <div class="card-body">
            <h1 class="card-title">?</h1>
            <p class="card-text">Número de usuarios reprobados debido a no cumplir los requisitos.</p>
          </div>
        </div>
        <!--
        <div class="card text-white bg-warning mr-3" style="max-width: 18rem;">
          <div class="card-header"><i class="fas fa-map-marker-alt"></i> Direcciones</div>
          <div class="card-body">
            <h1 class="card-title">5</h1>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      -->
      </div>
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
</html>
