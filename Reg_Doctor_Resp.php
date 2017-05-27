<?php
error_reporting(E_ALL);

//Variables para recuperar los datos
$nombre = $_POST["nombre"];
$apellido_paterno = $_POST["apellido_paterno"];
$apellido_materno = $_POST["apellido_materno"];
$genero = $_POST["genero"];
$telefono = $_POST["telefono"];
$movil = $_POST["movil"];
$email = $_POST["email"];
$fecha_nacimiento = $_POST["fecha_nacimiento"];
$especialidad = $_POST["especialidad"];
$cedula_profesional = $_POST["cedula_profesional"];
$domicilio = $_POST["domicilio"];
$municipio = $_POST["municipio"];
$estado = $_POST["estado"];
$pais = $_POST["pais"];

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
		$query = utf8_decode( "Insert into doctor (nombre, apellido_materno, apellido_paterno, genero, cedula_profesional, especialidad, email, telefono, movil, estado, municipio, pais, domicilio, fecha_nacimiento) values ('".$nombre."','".$apellido_materno."','".$apellido_paterno."','".$genero."','".$cedula_profesional."','".$especialidad."','".$email."','".$telefono."','".$movil."','".$estado."','".$municipio."','".$pais."','".$domicilio."','".$fecha_nacimiento."')");
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