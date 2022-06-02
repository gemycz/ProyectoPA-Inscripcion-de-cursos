<?php
include ("database.php");
//Se crea una variable u objeto Database para hacer uso de todas las funciones que están en el archivo database.php
$usuarios= new Database();
$correo = $usuarios->sanitize($_POST['correo']);
$curso =  $usuarios->sanitize($_POST['curso']);
if( $usuarios->buscar_correo($correo)==0){
         $message= "No se pudo insertar los datos - El Usuario ya existe";
           $class="alert alert-primary";
            echo "<script>alert('Usted no se encuentra registrado con el correo ingresado')</script>";
            echo "<script> setTimeout(\"location.href='form2.php'\",250) </script>";

} else if(isset($_POST["submit"])){
    $revisar = getimagesize($_FILES["image"]["tmp_name"]);
    if($revisar !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContenido = addslashes(file_get_contents($image));
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));  
           
        $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc');
        
    
        //Credenciales Mysql
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'formulario';
        
        //Crear conexion con la abse de datos
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        // Cerciorar la conexion
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        //Insertar imagen en la base de datos
        $insertar = $db->query("UPDATE usuario SET comprobante = '$imgContenido' WHERE correo_user = '$correo' AND curso_user = '$curso'");
        // COndicional para verificar la subida del fichero
        if($insertar){
            //echo "Archivo Subido Correctamente.";
            echo "<script>alert('Archivo subido correctamente')</script>";
            echo "<script> setTimeout(\"location.href='index.html'\") </script>";
        }else{
            echo "<script>alert(Ha fallado la subida, reintente nuevamente.)</script>";
            echo "<script> setTimeout(\"location.href='form2.php'\",250) </script>";
        } 
        // Sie el usuario no selecciona ninguna imagen
    }else{
        echo "<script>alert(Por favor seleccione imagen a subir.)</script>";
        echo "<script> setTimeout(\"location.href='form2.php'\",250) </script>";
    }
}
?>