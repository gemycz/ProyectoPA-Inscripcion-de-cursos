//FUNCION QUE VALIDA LOS CAMPOS
 //Validación de nombre, apellido cedula y correo

function validacion() {
 nombre= document.getElementById("nombre").value;
 apellido= document.getElementById("apellido").value;
 cedula=document.getElementById("cedula").value;
 correo=document.getElementById("correo").value;
    var cad = document.getElementById("cedula").value.trim();
    var total = 0;
    var longitud = cad.length;
    var longcheck = longitud - 1;
    //Valida si Nombre y apellido es solo texto
    if(!isNaN(nombre)) {
        alert("Solo se acepta texto - Campo Nombre");
         //En caso de ser un numero retorna falso
        return false;

        //Valida si cedula tiene 10 digitos
    }else if(!isNaN(apellido)){
        alert("Solo se acepta texto - Campo Apellido");
         //En caso de ser un numero retorna falso
        return false;
    }else if(!(/^\d{10}$/.test(cedula))){
         alert("Asegurece de ingresar valores numericos de 10 dígitos - Campo Cedula");
         //En caso de que no tenga 10 digitos retorna falso
          return false;
          //Validación de cedula ecuatoriana con el digito verificador
          //Este proceso valida que una cedula sea correcta
     } else if (!(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(correo))){
      alert("Asegurece de ingresar un correo valido - Campo correo ");
      return false;
    }  else if(cad !== "" && longitud === 10){
          for(i = 0; i < longcheck; i++){
             if (i%2 === 0) {
                var aux = cad.charAt(i) * 2;
                 if (aux > 9) aux -= 9;
                 total += aux;
             } else {
                 total += parseInt(cad.charAt(i)); // parseInt o concatenará en lugar de sumar
             }
          }
          total = total % 10 ? 10 - total % 10 : 0;
          //En caso de que la cedula sea correcta retorna Verdadero caso contrario retorna Falso
          //Al retornar verdadero el formulario de "Creacion de cliente" se enviará
          //si retorna falso el formulario no se enviará
              if (cad.charAt(longitud-1) == total) {
                  return true;
               }else{
               alert("Asegurece de ingresar una cédula correcta - Casilla Cedula");
              return false;
         }
      }


}
