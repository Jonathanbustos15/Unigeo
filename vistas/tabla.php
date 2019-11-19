<?php
  session_start();
	require_once "../Conexion/conexion.php";
	$conexion=conexion();

  if (isset($_SESSION['rol'])) {
      
    }else {
      header("location: ./loginTabla.php");
    }
//  }
?>

 <div class="row">
 	<div class="col-sm-12">
 	<h2>Universidades</h2>
 		<table class="table table-hover table-condensed table-bordered">

        <?php if ($_SESSION['rol'][0] == 1) { ?>
 	    <caption>
 			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">
 				Agregar nueva Universidad
 				<span class="glyphicon glyphicon-plus"></span>
 			</button>
 		</caption>

    <?php   }?>
 			<tr>
 				<td>Nit</td>
 				<td>Nombre</td>
 				<td>Dirreccion</td>
 				<td>Cx</td>
 				<td>Cy</td>
 				<td>Telefono</td>
 				<td>Email</td>
          <?php if ($_SESSION['rol'][0] == 1) { ?>
 				<td>Editar</td>
 				<td>Eliminar</td>

          <?php   }?>
 			</tr>

 <?php
 	if(isset($_SESSION['consulta'])){
 		if($_SESSION['consulta'] > 0){
 			$idu=$_SESSION['consulta'];


 			$query="SELECT id_universidad, Nit, Nombre,Direccion,Cx,Cy, Telefono, Email, Estado
 						from universidad WHERE id_universidad='$idu'";
 		}else{
 			$query="SELECT id_universidad, Nit, Nombre,Direccion,Cx,Cy, Telefono, Email, Estado
  				      from universidad";
     }
      }else{
 					$query="SELECT id_universidad, Nit, Nombre,Direccion,Cx,Cy, Telefono, Email, Estado
 						from universidad";
 				}

 				$ejecutar=pg_query($query);
 				while($ver=pg_fetch_array($ejecutar)){

 					$datos=$ver[0]."||".
 					       $ver[1]."||".
 						     $ver[2]."||".
 						     $ver[3]."||".
 						     $ver[4]."||".
 						     $ver[5]."||".
 						     $ver[6]."||".
 						     $ver[7];
 			 ?>
 			<tr>

 				<td><?php echo $ver[1] ?></td>
 				<td><?php echo $ver[2] ?></td>
 				<td><?php echo $ver[3] ?></td>
 				<td><?php echo $ver[4] ?></td>
 				<td><?php echo $ver[5] ?></td>
 				<td><?php echo $ver[6] ?></td>


 				<td><?php echo $ver[7] ?></td>

                  <?php if ($_SESSION['rol'][0] == 1) { ?>
 				<td>
 					<button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion"
 				      onclick="agregaform('<?php echo $datos ?>')">
 					</button>
 				</td>

 				<td>
 					<button class="btn btn-danger glyphicon glyphicon-remove"
 					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">


 					</button>
 				</td>
    <?php   }?>
 			</tr>

 			<?php
 		}
 			 ?>
 		</table>
 	</div>
 </div
