<?php
//conectamos con el servidor
		function conexion(){
          $conectar= pg_connect("host='localhost' dbname=unigeo port=5432 user=postgres password=123456") or die ("Error de Conexion".pg_last_error());
          return $conectar;
          }

			
 ?>
