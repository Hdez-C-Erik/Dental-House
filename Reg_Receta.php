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
		<div class="row">
			<div class="col-md-8 col-xs-5 text-left"></div>
			<div class="col-md-4 col-xs-7 text-left">

				<select class="form-control" style="visibility:hidden" disabled="disabled">
                    <?php
                        $result2=$con->query("SELECT * FROM receta");
                        while($row2 = $result2->fetch_array())
                        {
                            echo "<option value='".$row2["id_receta"]."'>".$row2["folio"]."</option>";
                            $temp2=$row2["folio"];
                            $temp2+=1;
                        }
                    ?>
                </select>
                <label>-- Folio --</label>
                <span class="col-lg-12">	
                	<?php

                        {
                            echo "".$temp2."";
                        }
                    ?>
                    <br><br>
                </span>
			</div>
			<div class="col-md-12 col-xs-12 text-left">
				
				<select class="form-control" disabled="disabled" style="visibility:hidden" onchange="getID(this.value);">
                    <?php
                        $result=$con->query("SELECT * FROM atencion_medica");
                        while($row = $result->fetch_array())
                        {
                            echo "<option value='".$row["id_atencion_medica"]."'>".$row["descripcion"]."</option>";
                            $temp=$row["id_atencion_medica"];
                        }
                    ?>
                </select>
                <label>Descipcion Medica</label>
                <span class="col-lg-12"">
                	<br>
                	<?php
                        $result=$con->query("SELECT * FROM atencion_medica WHERE id_atencion_medica= $temp");
                        while($row = $result->fetch_array())
                        {
                            echo "".$row["descripcion"]."";
                        }
                    ?>
                    <br><br>
                </span>
			</div>

			<div class="col-md-12 col-xs-12 text-left">
				<label>Prescripci&oacute;n</label><br>
				<input type="text" class="form-control" maxlength="1000" id="txtdescripcion">
			</div>
			<select class="form-control" id="txtid_atencion_medica" disabled="disabled" style="visibility:hidden">
                    <?php
                    $result=$con->query("SELECT * FROM atencion_medica ORDER BY id_atencion_medica DESC");
                    while($row = $result->fetch_array())
                    {
                        echo "<option value='".$row["id_atencion_medica"]."'>".$row["descripcion"]."</option>";
                    }
                ?>
            </select>
		<br>
		<div class="row">
			<div class="col-md-6"></div>
			<div class="col-md-6">
				<button type="button" id="btnRegistro" class="btn btn-success" onclick="CapturaDatosReceta()">
					Registrar
				</button>
			</div>
			<select class="form-control" id="txtfolio" disabled="disabled" style="visibility:hidden">
                <?php
                $result2=$con->query("SELECT * FROM receta ORDER BY id_receta DESC");
                while($row2 = $result2->fetch_array())
                {
                    echo "<option value='".$row2["folio"]."'>".$row2["folio"]."</option>";
                }
                ?>
            </select>
		</div>
		<button id="btnRegistro" class="btn btn-success" onclick="cargarcontenidoPestania2('op3')">
			Siguiente
		</button>
		<div id="Respuesta" class="row"></div>
		<br>

		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/Reg_Receta.js" type="text/javascript"></script>
	</body>
</html>