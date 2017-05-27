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
				<select class="form-control" disabled="disabled" style="visibility:hidden" onchange="getID(this.value);">
                    <?php
                        $result=$con->query("SELECT * FROM receta");
                        while($row = $result->fetch_array())
                        {
                            echo "<option value='".$row["id_receta"]."'>".$row["descripcion"]."</option>";
                            $temp3=$row["id_receta"];
                        }
                    ?>
                </select>
                <label>Prescripci&oacute;n</label>
                <span class="col-lg-12"">
                    <br>
                    <?php
                        $result=$con->query("SELECT * FROM receta WHERE id_receta= $temp3");
                        while($row = $result->fetch_array())
                        {
                            echo "".$row["descripcion"]."";
                        }
                    ?>
                    <br><br>
                </span>
			</div>

            <div class="col-md-12 text-right">
                <br><br>
                <button type="button" class="btn btn-danger" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove-sign">&nbsp;Cerrar</span>
                </button>
            </div>
		<br>
		<div id="Respuesta" class="row"></div>
		<br>

		<script src="js/jquery-3.1.1.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/Reg_Receta.js" type="text/javascript"></script>
	</body>
</html>