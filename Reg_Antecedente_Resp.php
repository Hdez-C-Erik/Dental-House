<?php
error_reporting(E_ALL);

//Variables para recuperar los datos
$fecha_ingreso = $_POST["fecha_ingreso"];
$enfermedad = $_POST["enfermedad"];
$alergia = $_POST["alergia"];


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
		$query = utf8_decode( "Insert into antecedente (fecha_ingreso, enfermedad, alergia) values ('".$fecha_ingreso."','".$enfermedad."','".$alergia."')");
		//echo $query;
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