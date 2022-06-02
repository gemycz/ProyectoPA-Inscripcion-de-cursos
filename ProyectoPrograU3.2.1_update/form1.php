<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/0fce671442.js" crossorigin="anonymous"></script>

    <title>ESPEDU - Registro</title>
  </head>
  <header>
    <!--MENU-->
        <nav class="navbar navbar-expand-lg fixed-top">
      <img src="./img/logo.png" width="150">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.html"><i class="fas fa-home"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-users"></i> Nosotros</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Log In</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="form1.php"><i class="fas fa-user-plus"></i> Sing Up</a>
          </li>
        </ul>
      </div>
    </nav>
    <!--MENU/FIN-->
  </header>s
  <body id="form1">
    <!--BANNER-->
    <div class="jumbotron jumbotron-fluid fixed">
  <div class="container">

  </div>
</div>
  <!--BANNER/FIN-->
  <div class="container p-4">
      <div class="row">

        <div class="col">
          <p><i class="fas fa-address-card"></i> Si desea subir el archivo de pago click aqui:</p>
<a class="btn btn-success"href="form2.php" title="Aprobar" data-toggle="tooltip"> Pagar</a>
        </div>
        <div class="col">
        <center>

          <h4><i class="fas fa-address-card"></i> FORMULARIO DE <strong>REGISTRO</strong></h4>
        </center>
        </div>
        <div class="col">
        </div>
      </div>
    </div>
  <!--CONTENEDOR FORM-->
    <div class="container" id="contenido-index">
    <div class="row">
        <div class="col-sm-4">
        <!--ESPACIO/IZQUIERDA-->
        <!--
        <img src="./img/banner2.png" width="380">
        -->
        </div>
        <div class="col-sm-4">
        <!--FORMULARIO-->

        <div class="card card-form">
          <style media="screen">
          .card-form{
          }
          </style>
          <div class="card-body">
          <form method="post" class="user" action="enviar2.php" >
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Alice" required>
              <div id="mensajeNombre"></div>
            </div>
            <div class="form-group">
              <label for="apellido">Apellido</label>
              <input type="text" class="form-control" id="apellido" name="apellido"  placeholder="Ej: Cooper" required>
              <div id="mensajeApellido"></div>
            </div>
            <div class="form-group">
              <label for="cedula">Cedula</label>
              <input type="text" class="form-control" id="cedula"  name="cedula" placeholder="Ej: 2304372221" required>
              <div id="mensaje"></div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Correo</label>
              <input type="email" class="form-control" id="correo" name="correo" placeholder="Ej: alicecooper@gmail.com" required>
              <div id="mensajeCorreo"></div>
            </div>
            <div class="form-group">
              <label for="tipo">Tipo de Usuario</label>
              <select class="form-control" id="tipo" name="tipo" required>
                <option value="" disabled selected>--Seleccione--</option>
                <option value="Estudiante">Estudiante</option>
                <option value="Profesor">Profesor</option>
                <option value="Profesional">Profesional Externo</option>
              </select>
            </div>
            <div class="form-group">
              <label for="curso">Curso</label>
              <select class="form-control" id="curso" name="curso" required>
                <option value="" disabled selected>--Seleccione--</option>
                <option value="HTML">HTML ($250)</option>
                <option value="CSS">CSS ($200)</option>
                <option value="JAVASCRIPT">JAVASCRIPT ($300)</option>
              </select>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                <label class="form-check-label" for="invalidCheck3">
                  Estoy de acuerdo con la <a href="politicadeprivacidad.html"  target="_blank">Política de Privacidad</a> de <strong>ESPEDU</strong>.
                </label>
                <div class="invalid-feedback">
                  Si no estas de acuerdo no puedes registrarte.
                </div>
              </div>
            </div>
            <button id="boton" type="submit" class="btn btn-primary" onclick="buscar_curso()" ><i class="fas fa-share-square"  ></i> Enviar</button>
            <button    type="reset" class="btn btn-danger float-right" ><i class="fas fa-broom"></i> Limpiar</button>
          </form>

        </div>
        </div>
        <!--CODIGO DEL FORM/END-->
        <!--VALIDACIONES
         <script src="validaciones.js"></script>-->
         <script src="validaciones1.js" type="text/javascript"></script>
        </div>
        <div class="col-sm-4">
          <!--ESPACIO/DERECHA-->
          <!--
          <img src="./img/banner3.png" width="380">
          -->
        </div>
    </div>
  </div>
    <!--FORM/FIN-->
    <!-- Optional JavaScript -->
    <footer class="page-footer font-small blue fixed-bottom" style="background:#000;">
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">
    <p class="text-light">© 2020 ESPE-ITIN GENEJO. Todos los derechos reservados.</p>
  </div>
  <!-- Copyright -->
</footer>
  </body>
</html>
