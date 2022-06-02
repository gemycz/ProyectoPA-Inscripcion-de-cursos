<?php

	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="formulario";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
		}

		public function sanitize($var){
			$return = mysqli_real_escape_string($this->con, $var);
			return $return;
		}
		public function create($nombre,$apellido,$cedula,$correo,$tipo,$curso){
			$sql = "INSERT INTO `usuario` (nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user, estado, aprobacion) VALUES ('$nombre','$apellido', '$cedula', '$correo', '$tipo','$curso','Sin Pagar', 'No Aprobado')";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
		public function read(){
			$sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user, estado, comprobante FROM usuario";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}


		public function readnoapro(){
			$sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user, estado, aprobacion FROM usuario where aprobacion ='No Aprobado'";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

		public function readnopago(){
			$sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user, estado, aprobacion, comprobante FROM usuario where estado ='Sin Pagar' AND aprobacion='Aprobado'";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}
public function readpago(){
			$sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user, estado, aprobacion, comprobante FROM usuario where estado ='Pagado'";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

		public function read2($buscar){
			$sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user FROM usuario where nombre_user ='$buscar'";
			$res = mysqli_query($this->con, $sql);
			return $res;
		}

		/*public function buscar_cedula($cedula){
		    $sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user FROM usuario where cedula_user ='$cedula'";
		    $res = mysqli_query($this->con, $sql);

			if(mysqli_num_rows($res)>0){
				return 1;
			} else {
				return 0;
			}
		}
*/
		public function buscar_correo($correo){
		    $sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user FROM usuario where correo_user ='$correo'";
		    $res = mysqli_query($this->con, $sql);

			if(mysqli_num_rows($res)>0){
				return 1;
			} else {
				return 0;
			}
		}

		public function buscar_curso($curso, $correo, $cedula){
		    $sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user FROM usuario where curso_user ='$curso' AND correo_user ='$correo' AND cedula_user ='$cedula' ";
		    $res = mysqli_query($this->con, $sql);

			if(mysqli_num_rows($res)>0){
				return 1;
			} else {
				return 0;
			}
		}

		public function single_record($id){
			$sql = "SELECT id_user, nombre_user, apellido_user,  cedula_user, correo_user, tipo_user, curso_user FROM usuario where id_user ='$id'";
			$res = mysqli_query($this->con, $sql);
			$return = mysqli_fetch_object($res );
			return $return ;
		}


		public function update($nombre,$apellido,$cedula,$correo,$tipo,$curso,$aprobacion, $id){
			$sql = "UPDATE usuario SET nombre_user='$nombre', apellido_user='$apellido', cedula_user='$cedula', correo_user='$correo', tipo_user='$tipo', curso_user='$curso', aprobacion='$aprobacion' WHERE id_user=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

		public function updateestado($nombre,$apellido,$cedula,$correo,$tipo,$curso,$estado,$aprobacion, $id){
			$sql = "UPDATE usuario SET nombre_user='$nombre', apellido_user='$apellido', cedula_user='$cedula', correo_user='$correo', tipo_user='$tipo', curso_user='$curso',estado='$estado', aprobacion='Aprobado' WHERE id_user=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}



		public function delete($id){
			$sql = "DELETE FROM usuario WHERE id_user=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}

		public function verComprobante($id){
			$sql = "SELECT comprobante FROM usuario WHERE id_user=$id";
			$res = mysqli_query($this->con, $sql);
			if($res){
				return true;
			}else{
				return false;
			}
		}
	}



?>
