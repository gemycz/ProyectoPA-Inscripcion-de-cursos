<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:admin.php");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ESPEDU · Usuarios</title>

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
            <a class="nav-link active" style="color:#00713d;" href="usuarios.php">
              <i class="fas fa-file-invoice"></i>
              Comprobantes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" style="color:#333;" href="usuarios3.php">
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
        <h1 class="h2"><i class="fas fa-file-invoice"></i> <strong>Comprobantes</strong></h1>
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
      <div class="row">
          <div class="col-8">
        <h4>Lista de usuarios y sus comprobantes</h4>
        <p class="text-muted">Visualiza el comprobante de pago de los usuarios.</p>
      </div>
            <div class="col-4">
                <a href="usuarios2.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
            </div>
      </div>
      <div class="container-fluid">
                <div class="">
                </div>
                <?php

    				include ("database.php");
    				$registro= new Database();

    				if(isset($_POST) && !empty($_POST)){

    					$nombre = $_POST['nombre'];
    					$apellido =$_POST['apellido'];
    					$cedula = $_POST['cedula'];
    					$correo = $_POST['correo'];
    					$tipo = $_POST['tipo'];
    					$curso = $_POST['curso'];

    					$estado =$_POST['estado'];
    					$aprobacion =$_POST['aprobacion'];

    					$id=$_POST['id'];
    					$res = $registro->updateestado($nombre,$apellido,$cedula,$correo,$tipo,$curso,$estado,$aprobacion, $id);
    					if($res){
    						
$cuerpo = '<html>
                <head><meta charset="euc-jp">
                </head>
                <body>
                <br><br><br>
                <table class="body-wrap" style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; height: 100%; background: #efefef; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% ;">
                  <tbody>
                    <tr style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65;">
                      <td class="container" style="margin: 0 auto !important; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important;"><!-- Message start -->
                        <table style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; border-collapse: collapse; width: 100% !important;">
                          <tbody>
                            <tr style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65;">
                              <td class="masthead" style="margin: 0px; padding: 80px 0px; font-size: 100%; font-family: Helvetica, Helvetica, Arial, sans-serif; line-height: 1.65; background: #00713d; color: white; width: 580px;" align="center">
                                <img src="https://share1.cloudhq-mkt3.net/7a554f5a3870f7.png" alt="" width="400" height="100">
                              </td>
                            </tr>
                            <tr style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65;">
                              <td class="content" style="margin: 0px; padding: 30px 35px; font-size: 100%; font-family: Helvetica, Helvetica, Arial, sans-serif; line-height: 1.65; background: white; width: 510px;">
                                <h2 style="margin: 0; padding: 0; font-size: 28px; font-family: Helvetica, Arial, sans-serif; line-height: 1.25; margin-bottom: 20px;">
                <center><img src="https://itin.espe.edu.ec/wp-content/uploads/2019/01/espe-carrera-de-tecnologias-de-la-informacion.png" alt="" width="650" height="100"></center>
                <br>
                            Felicidades.</h2>
                                <p style="margin: 0; padding: 0; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: normal; margin-bottom: 20px;">
                                Hola '.$nombre.' '.$apellido.' estamos gustos de informarte que te encuentras listo para recibir el curso que has seleccionado. <br> Exitos y mucha suerte.<br></p>
                                
                                <p style="margin: 0; padding: 0; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: normal; margin-bottom: 20px;">
                                  <em style="font-size: 100%; margin: 0px; padding: 0px; line-height: 1.65;">
                                    <em>Vive como si fueses a morir al dia siguiente. Aprende como si fueses a vivir para siempre.</em>. 
                                    <br>Mahatma Gandhi
                                  </em>
                                  <br>
                                </p>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65;">
                      <td class="container" style="margin: 0 auto !important; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; display: block !important; clear: both !important; max-width: 580px !important;"><!-- Message start -->
                        <table style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; border-collapse: collapse; width: 100% !important;">
                          <tbody>
                            <tr style="margin: 0; padding: 0; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65;">
                              <td class="content footer" style="margin: 0; padding: 30px 35px; font-size: 100%; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; background: none;" align="center">(C) 2020 ESPEDU. Todos los derechos reservados</td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  </tbody>
                </table>                
                </body>
                </html>';

        //para el envío en formato HTML
        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

        //dirección del remitente
        $headers .= "From: proyectop74@gmail.com"."\r\n";
        $headers .= "X-Mailer: PHP/".phpversion();

        //Una Dirección de respuesta, si queremos que sea distinta que la del remitente
        
        //Direcciones que recibián copia
        //$headers .= "Cc: ejemplo2@gmail.com\r\n";

        //direcciones que recibirán copia oculta
        //$headers .= "Bcc: ejemplo3@yahoo.com\r\n";

            if(mail($correo,"Pago Correcto",$cuerpo,$headers)){
            echo "<script>alert('Actualizado con exito')</script>";
                    echo "<script> setTimeout(\"location.href='usuarios.php'\",250) </script>";

            }else{
              echo "<script>alert('No se actualizo con exito')</script>";
            }



            
          }else{
            $message="No se pudieron actualizar los datos";
            $class="alert alert-danger";
          }
          
        
        
          
        }


    				$cliente=$registro->single_record($id);
    			?>
    			<div class="">
    				<form method="post">

    				<div class="col-md-6">
    					<label>Nombres:</label>
    					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required value="<?php echo $cliente->nombre_user;?>">
    					<input type="hidden" name="id" id="id" class='form-control' maxlength="100"   value="<?php echo $cliente->id_user;?>" >
    				</div>
    				<div class="col-md-6">
    					<label>Apellidos:</label>
    					<input type="text" name="apellido" id="apellido" class='form-control' maxlength="100" required value="<?php echo $cliente->apellido_user;?>" >
    				</div>
    				<div class="col-md-6">
    					<label>Cédula:</label>
    					<input type="text" name="cedula" id="cedula" class='form-control' maxlength="20" required value="<?php echo $cliente->cedula_user;?>" >
    				</div>
    				<div class="col-md-6">
    					<label>Correo:</label>
    					<input type="email" name="correo" id="correo" class='form-control' maxlength="100" required value="<?php echo $cliente->correo_user;?>" >
    				</div>
    				<div class="col-md-6">
    					<label>Tipo:</label>
    					<input type="text" name="tipo" id="tipo" class='form-control' maxlength="15" required value="<?php echo $cliente->tipo_user;?>" >
    				</div>
    				<div class="col-md-6">
    					<label>Curso:</label>
    					<input type="text" name="curso" id="curso" class='form-control' maxlength="64" required value="<?php echo $cliente->curso_user;?>" >
    				</div>

    					<div class="col-md-6">
    					<label>Estado:</label>
    					<select class="form-control" name="estado" id="estado" class='form-control' maxlength="64" required value="<?php echo $cliente->estado;?>">
    					<option>Sin Pagar</option>
    					<option>Pagado</option>

    					</select>
    				</div>
    				</div>
    				<div class="col-md-12 pull-right">
    				<hr>
    					<button type="submit" class="btn btn-success">Actualizar Datos</button>
    				</div>
    				</form>
            </div>
    </main>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
</html>
