<?php
	require_once "../Conexion/conexion.php";
	$conexion=conexion();
		$query="SELECT id_universidad, Nit, Nombre,Direccion,Cx,Cy, Telefono, Email, Estado
						from universidad";
		 $ejecutar=pg_query($query);
 ?>

<br><br>

<div class="row">
	<div class="col-sm-8"></div>
	<div class="col-sm-4">
		<label>Buscador</label>
		<select id="buscadorvivo" class="form-control input-sm">
			<option value="0">Selecciona uno</option>
			<?php
				while($ver=pg_fetch_row($ejecutar)):
			 ?>
				<option value="<?php echo $ver[0] ?>">
					<?php echo $ver[2]." " ?>
				</option>
			<?php endwhile; ?>
		</select>
	</div>
</div>


<script type="text/javascript">
	$(document).ready(function(){
		$('#buscadorvivo').select2();
			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"POST",
					data:'valor=' + $('#buscadorvivo').val(),
			    url: '../Modelo/crearsession.php',
					success:function(r){
						console.log("Mensaje " + r);
						$('#tabla').load('tabla.php');
					}
				});
			});
		});
</script>
