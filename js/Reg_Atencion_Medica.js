function CapturaDatosAtencionMedica(){
	var url = "Reg_Atencion_Medica_Res.php";
	$.post(url,{fecha_hora:$("#txtfecha_hora").val(),
				descripcion:$("#txtdescripcion").val(),
				id_servicio:$("#txtid_servicio").val(),
				id_cita:$("#txtid_cita").val()},
	function (data){
		$("#Respuesta").html(data);
	});
}