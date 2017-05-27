<?php

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
				<input type="text" class="form-control" maxlength="15" id="txttelefono" onkeypress="return SoloNumero(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Movil</label><br>
				<input type="text" class="form-control" maxlength="15" id="txtmovil" onkeypress="return SoloNumero(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Email</label><br>
				<input type="text" class="form-control" maxlength="50" id="txtemail" onchange="return ValidarCorreoElectonico(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Fecha de nacimiento</label><br>
				<input type="date" class="form-control" id="txtfecha_nacimiento" >
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Especialidad</label><br>
				<input type="text" class="form-control" maxlength="20" id="txtespecialidad" onkeypress="return SoloLetras(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Cedula profesional</label><br>
				<input type="text" class="form-control" maxlength="8" id="txtcedula_profesional" onkeypress="return SoloNumero(event)">
			</div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Domicilio(Colonia, calle y n&uacute;mero)</label><br>
				<input type="text" class="form-control" maxlength="100" id="txtdomicilio" onkeypress="return SoloDirecciones(event)" >
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
		</div>

		<br>
		<div class="row">
			<div class="col-md-6">
				<button type="button" id="btnRegistro" class="btn btn-success" onclick="CapturaDatosDoctor()">
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
		<script src="js/Reg_Doctor.js" type="text/javascript"></script>
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


		</script>
	</body>
</html>