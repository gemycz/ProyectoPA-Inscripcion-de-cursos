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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ESPEDU · Aprobados</title>

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
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" style="color:#333;" href="dashboard.php">
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
            <a class="nav-link active" style="color:#00713d;" href="usuarios3.php">
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
        <h1 class="h2"><i class="fas fa-user-check"></i> Aprobados</strong></h1>
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
      <div class="">
        <h4>Lista de usuarios aprobados</h4>
        <p class="text-muted">Envia el certificado inscripción.</p>
      </div>
      <div class="">
        <table class="table">
          <thead class="thead-dark">
            <?php
                //$usuario,$nombres,$apellidos,$genero,$direccion,$telefono,$correo_electronico, $id
            ?>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Cédula</th>
              <th scope="col">Email</th>
              <th scope="col">Curso</th>
              <th scope="col">Tipo de usuario</th>
              <th scope="col">Aprobacion</th>
              <th scope="col">Estado</th>
            </tr>
          </thead>
            <?php
              include ('database.php');
              $usuarios = new Database();
              $listado=$usuarios->readpago();
            ?>
          <tbody>
            <?php
              while ($row=mysqli_fetch_object($listado)){
                  $id=$row->id_user;
                  $nombre=$row->nombre_user;
                  $apellido=$row->apellido_user;
                  $cedula=$row->cedula_user;
                  $correo=$row->correo_user;
                  $curso=$row->curso_user;
                  $tipo=$row->tipo_user;
                  $estado=$row->estado;
                  $aprobacion=$row->aprobacion;

                  $comprobante = $row->comprobante;
              ?>
            <tr>
              <th><?php echo $nombre;?></th>
              <td><?php echo $apellido;?></td>
              <td><?php echo $cedula;?></td>
              <td><?php echo $correo;?></td>
              <td><?php echo $curso;?></td>
              <td><?php echo $tipo;?></td>
                                <td><?php echo $aprobacion;?></td>

              <td><?php echo $estado;?></td>
<td><a class="btn btn-info" href="vista.php?id=<?php echo $id;?>" class="edit" title="Ver" data-toggle="tooltip" target="_blank"><i class="fas fa-eye"></i> Ver </a></td>
                  <!--<a class="btn btn-danger" href="delete.php?id=<?php/* echo $id;*/?>"title="Rechazar" data-toggle="tooltip"><i class="fas fa-times-circle"></i> Rechazar</a></td>-->
            </tr>
            <?php
      					}
      			?>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
</html>
