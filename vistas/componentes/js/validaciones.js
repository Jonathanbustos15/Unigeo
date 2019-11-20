function onlyLetras(e) {
  key = e.keyCode || e.which;
  tecla = String.fromCharCode(key).toLowerCase();
  letras = 'QWERTYUIOPASDFGHJKLÑZXCVBNMáéíóúabcdefghijklmnñopqrstuvwxyz ';
  especiales = " ";

  tecla_especial = false
  for(var i in especiales) {
      if(key == especiales[i]) {
          tecla_especial = true;
          break;
      }
  }

  if(letras.indexOf(tecla) == -1 && !tecla_especial){
    alertify.notify("Este campo solo permite caracter de tipo letras", 'error', 3)
    return false;
  }
}

function onlyNumber(e) {
  key = e.keyCode || e.which;
  tecla =  String.fromCharCode(key).toLowerCase();
  letras = "1234567890-., ";
  especiales = " ";

  tecla_especial = false
  for(var i in especiales) {
      if(key == especiales[i]) {
          tecla_especial = true;
          break;
      }
  }

  if(letras.indexOf(tecla) == -1 && !tecla_especial){
    alertify.notify("Este campo solo permite caracteres de tipo numerico", 'error', 3)
    return false;
  }
}

function onlyPhone(e) {
  key = e.keyCode || e.which;
  tecla =  String.fromCharCode(key).toLowerCase();
  letras = "1234567890EXText ";
  especiales = " ";

  tecla_especial = false
  for(var i in especiales) {
      if(key == especiales[i]) {
          tecla_especial = true;
          break;
      }
  }

  if(letras.indexOf(tecla) == -1 && !tecla_especial){
    alertify.notify("Este campo solo permite caracteres de tipo numerico", 'error', 3)
    return false;
  }
}

/*
function limpia() {
  var val = document.getElementById("nombre").value;
  var tam = val.length;
  for(i = 0; i < tam; i++) {
      if(!isNaN(val[i]))
      alertify.notify("Este campo solo permite letras", 'error', 1)
          document.getElementById("nombre").value = " ";
  }
}
*/
/* Funcion para no permitit copiar y pegar en campo nombre*/
window.onload = function() {
  var myInput = document.getElementById("nombre");
  myInput.onpaste = function(e) {
    e.preventDefault();
      alertify.notify("Esta accion esta prohibida", 'error', 3)
  }

  myInput.oncopy = function(e) {
    e.preventDefault();
    alertify.notify("Esta accion esta prohibida", 'error', 3)
  }
}

/* Funcion para validar que el correo ingresado sea correcto*/
function validarEmail() {
    var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    var EmailId = document.getElementById("email").value;
    if (emailRegex.test(EmailId)){
    }else{
      alertify.notify("Este correo no es valido", 'error', 5)
        document.getElementById("email").value = " ";
    }
}
