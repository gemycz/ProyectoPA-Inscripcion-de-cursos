
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
					
					$estado =$_POST['estado'];
					$aprobacion =$_POST['aprobacion'];

					$id=$_POST['id'];
					$res = $registro->updateestado($nombre,$apellido,$cedula,$correo,$tipo,$curso,$estado,$aprobacion, $id);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						echo "<script>alert('Actualizado con exito')</script>";
                  echo "<script> setTimeout(\"location.href='usuarios2.php'\") </script>";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}

				$cliente=$registro->single_record($id);
			?>
			<div class="row">
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
        </div>
    </div>     
</body>
</html>      