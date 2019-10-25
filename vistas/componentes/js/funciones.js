function agregardatos(nit,nombre,direccion,cx,cy,telefono,email,estado){

	cadena= "nit=" + nit +
			"&nombre=" + nombre +
			"&direccion=" + direccion +
			"&cx=" + cx +
			"&cy=" + cy +
			"&telefono=" + telefono +
			"&email=" + email;

	$.ajax({
		type:"POST",
		url:"../Modelo/agregarDatos.php",
		data:cadena,
		success:function(r){
			if(r=true){
				$('#tabla').load('tabla.php')
				$('#buscador').load('buscador.php');
				$('input').val(" ");
				alertify.success("agregado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}


function agregaform(datos){
	d=datos.split('||');
    $('#id_universidadu').val(d[0]);
		$('#nitu').val(d[1]);
		$('#nombreu').val(d[2]);
		$('#direccionu').val(d[3]);
		$('#cxu').val(d[4]);
		$('#cyu').val(d[5]);
		$('#telefonou').val(d[6]);
		$('#emailu').val(d[7])
	}

	function actualizaDatos(){

	id_universidad=$('#id_universidadu').val();
	nit=$('#nitu').val();
	nombre=$('#nombreu').val();
	direccion=$('#direccionu').val();
	cx=$('#cxu').val();
	cy=$('#cyu').val();
	telefono=$('#telefonou').val();
	email=$('#emailu').val();


	cadena= "id_universidad=" + id_universidad +
			"&nit=" + nit +
			"&nombre=" + nombre +
			"&direccion=" + direccion +
			"&cx=" + cx +
			"&cy=" + cy +
			"&telefono=" + telefono +
			"&email=" + email;

	$.ajax({
		type:"POST",
		url:"../Modelo/actualizaDatos.php",
		data:cadena,
		success:function(r){
			if(r=true){
				$('#tabla').load('tabla.php');
				$('#buscador').load('buscador.php');
				alertify.success("Actualizado con exito :)");
			}else{
				alertify.error("Fallo el servidor :(");
			}
		}
	});
}

function preguntarSiNo(id_universidad){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?',
					function(){ eliminarDatos(id_universidad) }
                , function(){ alertify.error('Se cancelo')});
}

function eliminarDatos(id_universidad){

	cadena="id_universidad=" + id_universidad;

		$.ajax({
			type:"POST",
			url:"../Modelo/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if(r=true){
					$('#tabla').load('tabla.php');
					$('#buscador').load('buscador.php');
					alertify.success("Eliminado con exito!");
				}else{
					alertify.error("Fallo el servidor :(");
				}
			}
		});
	}
