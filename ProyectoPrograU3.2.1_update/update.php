
<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:admin.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Actualizar registro</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Editar <b>Datos</b></h2></div>
                    <div class="col-sm-4">
                        <a href="usuarios2.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
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
					
					$aprobacion =$_POST['aprobacion'];
					
					$id=$_POST['id'];
					$res = $registro->update($nombre,$apellido,$cedula,$correo,$tipo,$curso,$aprobacion, $id);
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
                            Gracias.</h2>
                                <p style="margin: 0; padding: 0; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: normal; margin-bottom: 20px;">
                                Hola '.$nombre.' '.$apellido.' hemos verificado exitosamente tus datos. <br> Ya estas habilitado para realizar el pago.<br></p>
                                <ul>
                                Numero de Cuenta:
                                <li>
                                2354879568.
                                </li>
                                </ul>
                                <ul>
                                Tipo de Cuenta:
                                <li>
                                Corriente.
                                </li>
                                </ul>
                                                                <br> Suba el archivo en la misma web oficial.

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

		        if(mail($correo,"Datos correctos",$cuerpo,$headers)){
		        echo "<script>alert('Actualizado con exito')</script>";

        echo "<script> setTimeout(\"location.href='usuarios2.php'\",250) </script>";
		      	}else{
		      		echo "<script>alert('No se actualizo con exito')</script>";
		      	}
         }else{
            $message="No se pudieron insertar los datos";
            $class="alert alert-danger";
          }

						
     
	
					
						}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}					
					

				$cliente=$registro->single_record($id);
			?>
			<div class="row">
				<form method="post">
				
				<div class="col-md-6">
					<label>Nombres:</label>
					<input type="text" name="nombre" id="nombre" class='form-control' maxlength="100" required value="<?php echo $cliente->nombre_user;?>">
					<input type="hidden" name="id" id="id" class='form-control' maxlength="100"   value="<?php echo $cliente->id_user;?>">
				</div>
				<div class="col-md-6">
					<label>Apellidos:</label>
					<input type="text" name="apellido" id="apellido" class='form-control' maxlength="100" required value="<?php echo $cliente->apellido_user;?>">
				</div>
				<div class="col-md-6">
					<label>Cédula:</label>
					<input type="text" name="cedula" id="cedula" class='form-control' maxlength="20" required value="<?php echo $cliente->cedula_user;?>">
				</div>
				<div class="col-md-6">
					<label>Correo:</label>
					<input type="email" name="correo" id="correo" class='form-control' maxlength="100" required value="<?php echo $cliente->correo_user;?>">
				</div>
				<div class="col-md-6">
					<label>Tipo:</label>
					<input type="text" name="tipo" id="tipo" class='form-control' maxlength="15" required value="<?php echo $cliente->tipo_user;?>">
				</div>
				<div class="col-md-6">
					<label>Curso:</label>
					<input type="text" name="curso" id="curso" class='form-control' maxlength="64" required value="<?php echo $cliente->curso_user;?>">
				</div>
				
				
					<div class="col-md-6">
					<label>Aprobacion:</label>
					<select class="form-control" name="aprobacion" id="aprobacion" class='form-control' maxlength="64" required value="<?php echo $cliente->aprobacion;?>">
					<option>No Aprobado</option>
					<option>Aprobado</option>
					  
					</select>
					
				
				</div>

				
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar Datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>      