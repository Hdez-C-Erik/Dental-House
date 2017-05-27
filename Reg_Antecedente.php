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
		<div class="row">
		<br>
			<div class="col-md-6 col-xs-12 text-left"></div>
			<div class="col-md-6 col-xs-12 text-left">
				<label>Fecha de ingreso</label><br>
				<input type="date" class="form-control" id="txtfecha_ingreso">
			</div>
			<div class="col-md-12 col-xs-12 text-left">
				<label>Enfermedad</label><br>
				<input type="text" class="form-control" maxlength="30" id="txtenfermedad" onkeypress="return SoloDirecciones1(event)">
			</div>
			<div class="col-md-12 col-xs-12 text-left">
				<label>Alerg&iacute;a</label><br>
				<input type="text" class="form-control" maxlength="30" id="txtalergia" onkeypress="return SoloDirecciones1(event)">
			</div>
		</div>
			<br>
			<br>
			<button id="btnRegistro" class="btn btn-success" onclick="CapturaDatosAntecedente()">
				Siguiente
			</button>
			<div class="modal-footer text-center">
				<button type="button" class="btn btn-danger" data-dismiss="modal">
					<span class="glyphicon glyphicon-remove-sign">&nbsp;Cerrar</span>
				</button>
			</div>
			
			<div id="Respuesta" class="row"></div>
		</div>

		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/Reg_Antecedente.js" type="text/javascript"></script>
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

function SoloDirecciones1(e)
{
	key=e.KeyCode || e.which;
	teclado = String.fromCharCode(key).toLowerCase();
	letras="abcdefghijklmnñopqrstuvwxyz0123456789";
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