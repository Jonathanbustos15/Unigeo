<?php
  session_start();
  unset($_SESSION['consulta']);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Universidades</title>

<!-- Llamo todos los archivos de vista para la pagina-->
  <link rel="stylesheet" type="text/css" href="componentes/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="componentes/css/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="componentes/css/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="componentes/select2/css/select2.css">
<!-- Lllama todos los archivos de js para las funciones y funcionamiento de la pagina-->
  <script type="text/javascript" src="componentes/js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="componentes/js/funciones.js"></script>
  <script type="text/javascript" src="componentes/js/validaciones.js"></script>
<!-- Componente alertyfy para mostrar alertas dentro de la pagina, Bostrap estilos-->
  <script src="componentes/bootstrap/js/bootstrap.js"></script>
  <script src="componentes/js/alertify.js"></script>
  <script src="componentes/select2/js/select2.js"></script>
</head>
<body>
<!-- Llama paginas php para muestra de datos y buscador -->
  <div class="container">
    <div id="buscador"></div>
		<div id="tabla"></div>
  </div>
<!-- Modal para el registro de nuevas universidad-->
<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4>Agregar Universidad</h4>
      </div>
      <div class="modal-body">
        	<label>NIT</label>
        	<input type="text" name="" id="nit" class="form-control input-sm"  onkeypress="return onlyNumber(event);">
        	<label>Universidad</label>
        	<input type="text" name="" id="nombre" class="form-control input-sm"  onkeypress="return onlyLetras(event);">
        	<label>Dirreccion</label>
        	<input type="text" name="" id="direccion" class="form-control input-sm" >
        	<label>Cx</label>
        	<input type="text" name="" id="cx" class="form-control input-sm" onkeypress="return onlyNumber(event);">
        	<label>Cy</label>
        	<input type="text" name="" id="cy" class="form-control input-sm" onkeypress="return onlyNumber(event);">
        	<label>Telefono</label>
        	<input type="text" name="" id="telefono" class="form-control input-sm" onkeypress="return onlyPhone(event);">
        	<label>Email</label>
        	<input type="text" name="" id="email" class="form-control input-sm" onblur="validarEmail()">

          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarnuevo">Agregar</button>
          </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal para la edician de registros -->
<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar datos</h4>
      </div>
      <div class="modal-body">

          <input type="text" hidden="" id="id_universidadu" name="">
          <label>nit</label>
          <input type="text" name="" id="nitu" class="form-control input-sm">
          <label>Universidad</label>
          <input type="text" name="" id="nombreu" class="form-control input-sm">
          <label>Dirreccion</label>
          <input type="text" name="" id="direccionu" class="form-control input-sm">
          <label>Cx</label>
          <input type="text" name="" id="cxu" class="form-control input-sm">
          <label>Cy</label>
          <input type="text" name="" id="cyu" class="form-control input-sm">
          <label>Telefono</label>
          <input type="text" name="" id="telefonou" class="form-control input-sm">
          <label>Email</label>
          <input type="email" name="" id="emailu" class="form-control input-sm">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="actualizadatos" data-dismiss="modal">Actualizar</button>
      </div>

    </div>
  </div>
</div>

</body>
</html>



<!-- Llamo a los archivos tabla.php y buscador.php para mostrarlo en la pagina una vez carge -->
<script type="text/javascript">
 $(document).ready(function(){
   $('#tabla').load('tabla.php')
   $('#buscador').load('buscador.php');
 });
</script>


<!-- Tomo los datos del modal de registro y los envio a la funcion agredardatos en archivo funciones.js -->
<!-- Valido que ningun campo este vacio con el If -->
<script type="text/javascript">
   $(document).ready(function(){
    $('#guardarnuevo').click(function(){
      nit =$('#nit').val();
      nombre =$('#nombre').val();
      direccion =$('#direccion').val();
      cx =$('#cx').val();
      cy =$('#cy').val();
      telefono =$('#telefono').val();
      email =$('#email').val();
      if (nit == "" || nombre == "" || direccion == "" || cx == "" || cy == "" || telefono == "" || email == "") {
         alertify.notify("Se deben llenar todos los datos", 'error', 3)
      }else {
       agregardatos(nit,nombre,direccion,cx,cy,telefono,email)
      }
    });

/* Doy funcion al boton editar y llamo a su metodo en funciones.js */
  $('#actualizadatos').click(function(){
    if (nit == "" || nombre == "" || direccion == "" || cx == "" || cy == "" || telefono == "" || email == "") {
      alertify.notify("Se deben llenar todos los datos", 'error', 3)
    }else{
     actualizaDatos();
     }
   });
  });


</script>
