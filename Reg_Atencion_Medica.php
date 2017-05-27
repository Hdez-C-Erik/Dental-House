<?php
include("conexion.php");
$con=conectarse();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
	<body>
		<div class="row">
			<div class="col-md-6 col-xs-12 text-left">
				<label>Cita</label><br>
				<select class="form-control" id="txtid_cita" onchange="getID(this.value);">
					<option selected="selected">Ninguna</option>
                    <?php
                        $result2=$con->query("SELECT * FROM cita ORDER BY fecha_hora ASC");
                        while($row2 = $result2->fetch_array())
                        {
                            echo "<option value='".$row2["id_cita"]."'>".$row2["fecha_hora"]."</option>";
                            
                        }
                    ?>
                </select>
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Fecha de Atencion</label><br>
				<input type="datetime-local" class="form-control" id="txtfecha_hora">
			</div>
			<div class="col-md-12 col-xs-12 text-left">
				<label>Descripcion</label><br>
				<input type="text" class="form-control" maxlength="1000" id="txtdescripcion">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Servicio</label><br>
				<select class="form-control" name="sltservicio" id="txtid_servicio">
					<option disabled="disabled" selected="selected">Seleccione un Servicio</option>
                    <?php
                        $result=$con->query("SELECT * FROM servicio");
                        while($row = $result->fetch_array())
                        {
                            echo "<option  value='".$row["id_servicio"]."'>".$row["nombre"]."</option>";
                            echo ".$utf8_encode($row).";
                        }
                    ?>
                </select>
			</div>
			
			<div class="col-md-6 col-xs-12 text-center">
				<br><br><br><br><br>
				<button id="btnRegistro" class="btn btn-success" onclick="CapturaDatosAtencionMedica()">
					Registrar Informaci&oacute;n
				</button>
			</div>
			<button id="btnRegistro" class="btn btn-success" onclick="cargarcontenidoPestania2('op2')">
				Siguiente
			</button>
			<div id="Respuesta" class="row"></div>
		</div>

		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/Reg_Atencion_Medica.js" type="text/javascript"></script>
		<script type="text/javascript">
			function getID(val){
				//alert(val);
				$.ajax({
					type: "POST",
					url: "getdata.php",
					data: "id_cita="+val,
					success: function(data){
						&(#nombrelist).html(data);
					}
				});
			}
		</script>
	</body>
</html>