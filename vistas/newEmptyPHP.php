<!DOCTYPE html>
<title>Login</title>
<meta charset="UTF-8">


<link href="componentes/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<script>

    var cadena = "Galileo1564";
    var expresionR = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).{8,16}$/;
    var resultado = expresionR.test(cadena);
    document.write(resultado);
    if (resultado) {
        document.body.innerHTML = "<h1>Verdadero verdadero verdadero</h1>";

    } else {
        document.body.innerHTML = "<h1>Falso falso falso</h1>";
    
    }



   

</script>  
<?php


