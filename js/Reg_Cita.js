function CapturaDatosCita(){
	var url = "Reg_Cita_Resp.php";
	$.post(url,{nombre:$("#txtnombre").val(),
				telefono:$("#txttelefono").val(),
				email:$("#txtemail").val(),
				fecha_hora:$("#txtfecha_hora").val()},
	function (data){
		$("#Respuesta").html(data);
	});
}