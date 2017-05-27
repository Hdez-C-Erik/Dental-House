<?php
error_reporting(E_ALL);

//Variables para recuperar los datos
$fecha_hora = $_POST["fecha_hora"];
$descripcion = $_POST["descripcion"];
$id_servicio = $_POST["id_servicio"];
$id_cita = $_POST["id_cita"];

//Variables para la conexión
$servidor = "localhost";
$basedatos = "historial_clinico";
$usuario = "root";
$contrasenia = "root";

try{
	$conexionMysqli = new mysqli($servidor, $usuario, $contrasenia, $basedatos);
	if ($conexionMysqli->connect_errno) {
		echo "Fallo la conexion con MySQL:(" . $conexionMysqli->connect_errno . ")" . $conexionMysqli->connect_error;
	}else{
		//echo utf8_decode("Conexion Habilitada");
		if ($id_cita=="Ninguna"){
			$query = utf8_decode( "Insert into atencion_medica (fecha_hora, descripcion, id_servicio) values ('".$fecha_hora."','".$descripcion."','".$id_servicio."')");
		//echo $query;
		}else{
		$query = utf8_decode( "Insert into atencion_medica (fecha_hora, descripcion, id_servicio, id_cita) values ('".$fecha_hora."','".$descripcion."','".$id_servicio."','".$id_cita."')");
		//echo $query;
		}
		$ResultadoOperacion = $conexionMysqli->query($query);
		
		if ($ResultadoOperacion) {
			//echo "Operación Realizada";
			?>
				<div class="text-success text-center">
					<p>Operaci&oacute;n Realizada con &eacute;xito</p>
				</div>
			<?php
		} else {
			//echo "Fallo la Operación";
			?>
				<div class="text-danger text-center">
					<p>Operaci&oacute;n <b>NO</b> Realizada con &eacute;xito</p>
				</div>
			<?php
		}
	}
} catch (Exception $e) {
	throw $e;
}