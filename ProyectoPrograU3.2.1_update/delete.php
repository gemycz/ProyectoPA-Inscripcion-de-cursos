
<?php


session_start();

//VALIDACIÓN DE SESION
if(isset($_SESSION['login'])){
  //MENSAJE DE ESTADO DE SESIÓN: CON SESIÓN
 
 

}else{
  //MENSAJE DE ESTADO DE SESIÓN: SIN SESIÓN
 header("location: login.php");
}


?>
<?php 
if (isset($_GET['id'])){
	include('database.php');
	$registro = new Database();
	$id=intval($_GET['id']);
	$res = $registro->delete($id);
	if($res){
		header('location: admin.php');
	}else{
		echo "Error al eliminar el registro";
	}
}
?>