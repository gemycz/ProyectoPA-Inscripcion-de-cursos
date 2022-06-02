
//Validacion del componente cedula 
document.getElementById('cedula').addEventListener('input', function() {
	   // campo = event.target;
	    boton = document.getElementById('boton');
	    var cad = document.getElementById("cedula").value.trim();
        var total = 0;
        var longitud = cad.length;
        var longcheck = longitud - 1;
        
    if(!(/^[0-9]$/.test(cedula))){
      document.getElementById("mensaje").innerHTML = (`<p style="color:red "> Solo se permiten valores numericos de 10 digitos</p>`);
            boton.disabled = true;
    }


    if(cad !== "" && longitud === 10){
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

          if (cad.charAt(longitud-1) == total) {
        	  document.getElementById("mensaje").innerHTML = (`<p style="color:green ">La cedula es correcta</p>`);
        	  boton.disabled = false;
            
          }else{
            
            document.getElementById("mensaje").innerHTML = (`<p style="color:red ">La cédula ingresada no es Válida</p>`);
            boton.disabled = true;
          }
        }
      }
);

//Validacion del componente nombre
document.getElementById('nombre').addEventListener('input', function() {
      boton = document.getElementById('boton');
      nombre= document.getElementById("nombre").value.trim();



       if(!(/^[a-zA-ZÀ-ÿ\s]{1,40}$/.test(nombre))) {
        document.getElementById("mensajeNombre").innerHTML = (`<p style="color:red "> El nombre ingresado no es valido, solo se permite texto</p>`);
            boton.disabled = true;
        
      }else{
            
           document.getElementById("mensajeNombre").innerHTML = (`<p style="color:green ">El nombre es correcto</p>`);
        boton.disabled = false;
          }


      }
);

//Validacion del componente apellido
document.getElementById('apellido').addEventListener('input', function() {
      boton = document.getElementById('boton');
      apellido= document.getElementById("apellido").value.trim();



       if(!(/^[a-zA-ZÀ-ÿ\s]{1,40}$/.test(apellido))) {
        document.getElementById("mensajeApellido").innerHTML = (`<p style="color:red ">El apellido ingresado no es valido, solo se permite texto</p>`);
            boton.disabled = true;
        
      }else{
            
           document.getElementById("mensajeApellido").innerHTML = (`<p style="color:green "> El apellido es correcto</p>`);
        boton.disabled = false;
          }


      }
);

//Validacion del componente correo
document.getElementById('correo').addEventListener('input', function() {
      boton = document.getElementById('boton');
      correo= document.getElementById("correo").value.trim();
       if(!(/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/.test(correo))) {
        document.getElementById("mensajeCorreo").innerHTML = (`<p style="color:red "> El correo ingresado no es valido </p>`);
            boton.disabled = true;
        
      }else{
            
           document.getElementById("mensajeCorreo").innerHTML = (`<p style="color:green ">El correo es correcto</p>`);
        boton.disabled = false;
          }


      }
);


