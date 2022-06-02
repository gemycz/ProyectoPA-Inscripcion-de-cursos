<?php
//VALIDACIÓN DE SESIÓN Y REDIRECCIONAMIENTO AL INDEX
	Session_start();
    Session_destroy();
    header("location:login.php");
    
?>