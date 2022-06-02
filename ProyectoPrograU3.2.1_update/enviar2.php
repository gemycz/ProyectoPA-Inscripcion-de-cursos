<?php

 //Se importa el archivo database.php donde se encuentran las funciones

include ("database.php");
//Se crea una variable u objeto Database para hacer uso de todas las funciones que están en el archivo database.php
$usuarios= new Database();
//Se valida si las variables $_POST están vacías, si están vacías no realiza ninguna acción
if(isset($_POST) && !empty($_POST)){
//Si no están vacias, se recibe los parametros del formulario
   $nombre = $usuarios->sanitize($_POST['nombre']);
   $apellido = $usuarios->sanitize($_POST['apellido']);
   $cedula = $usuarios->sanitize($_POST['cedula']);
   $correo = $usuarios->sanitize($_POST['correo']);
   $tipo = $usuarios->sanitize($_POST['tipo']);
   $curso = $usuarios->sanitize($_POST['curso']);
 
           if( $usuarios->buscar_curso($curso, $correo, $cedula)==1){
                
                 $message= "No se pudo insertar los datos - El Usuario ya existe";
                 $class="alert alert-primary";
                  echo "<script>alert('Ya se encuentra registrado en el curso seleccionado')</script>";
                  echo "<script> setTimeout(\"location.href='index.html'\",250) </script>";
 } else {
         //Se crea un cliente
        $res = $usuarios->create($nombre,$apellido,$cedula,$correo,$tipo,$curso);
        
        if($tipo =='Estudiante'){
      $tipo = 75;
      if($curso=='HTML'){
        $precio = 250-(250*($tipo/100));

      }elseif ($curso=='CSS') {
        $precio = 200-(200*($tipo/100));
      }else{
        $precio = 300-(300*($tipo/100));
      }

    }elseif ($tipo =='Profesor') {
       $tipo = 50;
       if($curso=='HTML'){
        $precio = 250-(250*($tipo/100));

      }elseif ($curso=='CSS') {
        $precio = 200-(200*($tipo/100));
      }else{
        $precio = 300-(300*($tipo/100));
      }
    }else{
      if($curso =='HTML'){
        $precio =250;
      }elseif ($curso =='CSS') {
        $precio =200;
      }else{
        $precio =300;
      }
    }    
          //Si los datos se insertar correctamente
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
                            Bienvenido.</h2>
                                <p style="margin: 0; padding: 0; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: normal; margin-bottom: 20px;">
                                Gracias '.$nombre.' '.$apellido.' por interesarte en nuestros cursos. <br> El curso que has seleccionado es el de '.$curso.' que tiene un costo de '.$precio.'.<br></p>
                                <p style="margin: 0; padding: 0; font-size: 16px; font-family: Helvetica, Arial, sans-serif; line-height: 1.65; font-weight: normal; margin-bottom: 20px;">
                                Verificaremos tus datos y de ser correctos te enviaremos la informacion necesaria para que realices el pago correspondiente.</p>
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

        if(mail($correo,"Registro correcto",$cuerpo,$headers)){
        echo "<script>alert('Registro realizado con exito.');</script>";
        echo "<script> setTimeout(\"location.href='index.html'\",250) </script>";

      }else{
        echo "<script>alert('No se pudo registrar.');</script>";
        echo "<script> setTimeout(\"location.href='index.html'\",250) </script>";

      }  
         }else{
            $message="No se pudieron insertar los datos";
            $class="alert alert-danger";
          }
    } 
}

?>