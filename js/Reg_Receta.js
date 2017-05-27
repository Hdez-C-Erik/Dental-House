function CapturaDatosReceta(){
	var url = "Reg_Receta_Resp.php";
	$.post(url,{
				folio:$("#txtfolio").val(),
				descripcion:$("#txtdescripcion").val(),
				id_atencion_medica:$("#txtid_atencion_medica").val()},

	function (data){
		$("#Respuesta").html(data);
	});
}