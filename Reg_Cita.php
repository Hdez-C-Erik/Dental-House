<?php 

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container panel-body row">
  <br><br><br><br><br>
  <div class="row">
	  <div id="myCarousel" class="carousel slide col-xs-12" data-ride="carousel">
		<ol class="carousel-indicators">
	    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	    	<li data-target="#myCarousel" data-slide-to="1"></li>
	    	<li data-target="#myCarousel" data-slide-to="2"></li>
	    	<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
	    <div class="carousel-inner" role="listbox">
	      <div class="item active">
	      	<img src="Img/Familia.jpg" alt="Protesis">
	      </div>
	      <div class="item">
	        <img src="Img/img1.jpg" alt="Ortodoncia">
	      </div>
	      <div class="item">
			<img src="Img/Ortodoncia.jpg" alt="Nina">
	      </div>
	    </div>
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
		</div>
	</div>
	<div class="row Fondo4">
		<div class="col-xs-3"></div>
	  	<div class="col-xs-6 row">
	  		<br>
	  		<br>
	  		<br>
			<div class="col-md-12 col-xs-12 text-left input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				<input type="text" maxlength="50" class="form-control" id="txtnombre" placeholder="Nombre" onkeypress="return SoloLetras(event)">
			</div>
			<br>
			<div class="col-md-12 col-xs-12 text-left input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
				<input type="text" maxlength="10" class="form-control" id="txttelefono" placeholder="T&eacute;lefono" onkeypress="return SoloNumero(event)">
			</div>
			<br>
			<div class="col-md-12 col-xs-12 text-left input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
				<input type="text" maxlength="50" class="form-control" id="txtemail"  placeholder="Email" onchange="return ValidarCorreoElectonico(event)">
			</div>
			<br>
			<div class="col-md-12 col-xs-12 text-left input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
				<input type="datetime-local" class="form-control" id="txtfecha_hora" min=”2017-01-01T08:00:00″ max=”2018-01-01T20:00:00″ step="1200">
			</div>
		</div>
		<div class="col-xs-12 row  text-center">
			<br>
			<br>
			<button id="btnRegistro" class="btn btn-success" onclick="CapturaDatosCita()">
				Siguiente
			</button>
			<div id="Respuesta" class="row"></div>
			<br>
			<br>
		</div>
			
	</div>
</div>

<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/Reg_Cita.js" type="text/javascript"></script>
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

