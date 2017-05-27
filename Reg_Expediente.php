<?php
include("conexion.php");
$con=conectarse();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">

</head>
	<body>
	<br>
		<div class="row">
			<div class="col-md-6 col-xs-12 text-left">
				<label>Nombre</label><br>
				<input type="text" class="form-control" maxlength="20" id="txtnombre" onkeypress="return SoloLetras(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Apellido paterno</label><br>
				<input type="text" class="form-control" maxlength="15" id="txtapellido_paterno" onkeypress="return SoloLetras(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Apellido materno</label><br>
				<input type="text" class="form-control" maxlength="15" id="txtapellido_materno" onkeypress="return SoloLetras(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>G&eacute;nero</label><br>
				<input type="text" class="form-control" maxlength="1" id="txtgenero" onkeypress="return SoloLetras2(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Tel&eacute;fono</label><br>
				<input type="text" class="form-control" maxlength="15" id="txttelefono" onkeypress="return SoloNumero>
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Movil</label><br>
				<input type="text" class="form-control" maxlength="15" id="txtmovil" onkeypress="return SoloNumero>
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Fecha de nacimiento</label><br>
				<input type="date" class="form-control" id="txtfecha_nacimiento">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Domicilio(Colonia, calle y n&uacute;mero)</label><br>
				<input type="text" class="form-control" maxlength="100" id="txtdomicilio" onkeypress="return SoloDirecciones(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Municipio</label><br>
				<input type="text" class="form-control" maxlength="20" id="txtmunicipio" onkeypress="return SoloDirecciones(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Estado</label><br>
				<input type="text" class="form-control" maxlength="20" id="txtestado" onkeypress="return SoloLetras(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Pa&iacute;s</label><br>
				<input type="text" class="form-control" maxlength="20" id="txtpais" onkeypress="return SoloLetras(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Grupo Sanguineo</label><br>
				<input type="text" class="form-control" maxlength="3" id="txtgrupo_sanguineo" onkeypress="return Tiposanguineo(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Doctor</label><br>
				<select class="form-control" id="txtid_doctor" sele>
					<option selected="selected" disabled="disabled">Seleccione Doctor</option>
                    <?php
                        $result1=$con->query("SELECT * FROM doctor ORDER BY nombre ASC");
                        while($row1 = $result1->fetch_array())
                        {
                            echo "<option value='".$row1["id_doctor"]."'>".$row1["nombre"]."</option>";
                            
                        }
                    ?>
                </select>
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Atenci&oacute;n Medica</label><br>
				<select class="form-control" id="txtid_atencion_medica" sele>
					<option selected="selected" disabled="disabled">Seleccione Fecha de Atenci&oacute;n</option>
                    <?php
                        $result1=$con->query("SELECT * FROM atencion_medica ORDER BY fecha_hora ASC");
                        while($row1 = $result1->fetch_array())
                        {
                            echo "<option value='".$row1["id_atencion_medica"]."'>".$row1["fecha_hora"]."</option>";
                            
                        }
                    ?>
                </select>
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Antecedente</label><br>
				<select class="form-control" id="txtid_antecedente" sele>
					<option selected="selected" disabled="disabled">Seleccione Antecedente</option>
					<option>Ninguna</option>
                    <?php
                        $result1=$con->query("SELECT * FROM antecedente ORDER BY fecha_ingreso ASC");
                        while($row1 = $result1->fetch_array())
                        {
                            echo "<option value='".$row1["id_antecedente"]."'>".$row1["fecha_ingreso"]."</option>";
                            
                        }
                    ?>
                </select>
			</div>
		</div>

		<br>
		<div class="row">
			<div class="col-md-6">
				<button type="button" id="btnRegistro" class="btn btn-success" onclick="CapturaDatosExpediente()">
					Registrar
				</button>
			</div>
			<div class="col-md-6 text-right">
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove-sign">&nbsp;Cerrar</span>
				</button>
			</div>
		</div>
		<div id="Respuesta" class="row"></div>
		<br>

		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/Reg_Expediente.js" type="text/javascript"></script>
		<script type="text/javascript">
		function SoloNumero(e)
	{
		Key=e.KeyCode || e.which;

		teclado = String.fromCharCode(Key);

		numero = "0123456789";

		especiales = "8-37-38-46";

		teclado_especial = false;

		for (var i in especiales)
		 {
			if (Key == especiales[i]) 
			{
				teclado_especial = true;
			}
		}

		if(numero.indexOf(teclado) == -1 && !teclado_especial)
		{
			return false;

		}
	}

function SoloLetras(e)
{
	key=e.KeyCode || e.which;
	teclado = String.fromCharCode(key).toLowerCase();
	letras="abcdefghijklmnñopqrstuvwxyz ";
	especiales="8-37-38-46-164";
	teclado_especial=false;

	for(var i in especiales)
	{

		if(key == especiales[i])
		{
			teclado_especial=true;
			break;
		}
	}

	if(letras.indexOf(teclado)==-1 && !teclado_especial)
	{
		return false;

	}
}

function SoloDirecciones(e)
{
	key=e.KeyCode || e.which;
	teclado = String.fromCharCode(key).toLowerCase();
	letras="abcdefghijklmnñopqrstuvwxyz0123456789# ";
	especiales="8-37-38-46-164";
	teclado_especial=false;

	for(var i in especiales)
	{

		if(key == especiales[i])
		{
			teclado_especial=true;
			break;
		}
	}

	if(letras.indexOf(teclado)==-1 && !teclado_especial)
	{
		return false;

	}
}

function ValidarCorreoElectonico(e)
{
	tecla = (document.all)?e.KeyCode : e.which;

	if (tecla == 40) return true;
	expresion = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

	te = String.fromCharCode(tecla);

	if(expresion.test(te))
	{
		return true;
	} 
	else
    {
    	alert("Formato de correo incorrecto")
    	return false;
    }
}
function SoloLetras2(e)
{
	key=e.KeyCode || e.which;
	teclado = String.fromCharCode(key).toLowerCase();
	letras="mf";
	especiales="8-37-38-46-164";
	teclado_especial=false;

	for(var i in especiales)
	{

		if(key == especiales[i])
		{
			teclado_especial=true;
			break;
		}
	}

	if(letras.indexOf(teclado)==-1 && !teclado_especial)
	{
		return false;

	}
}
function Tiposanguineo(e)
{
	key=e.KeyCode || e.which;
	teclado = String.fromCharCode(key).toLowerCase();
	letras="abo+-";
	especiales="8-37-38-46-164";
	teclado_especial=false;

	for(var i in especiales)
	{

		if(key == especiales[i])
		{
			teclado_especial=true;
			break;
		}
	}

	if(letras.indexOf(teclado)==-1 && !teclado_especial)
	{
		return false;

	}
}


		</script>
	</body>
</html>