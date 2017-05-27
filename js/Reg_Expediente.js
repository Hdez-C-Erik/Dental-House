function CapturaDatosExpediente(){
	var url = "Reg_Expediente_Resp.php";
	$.post(url,{
				nombre:$("#txtnombre").val(),
				apellido_paterno:$("#txtapellido_paterno").val(),
				apellido_materno:$("#txtapellido_materno").val(),
				genero:$("#txtgenero").val(),
				telefono:$("#txttelefono").val(),
				movil:$("#txtmovil").val(),
				fecha_nacimiento:$("#txtfecha_nacimiento").val(),
				domicilio:$("#txtdomicilio").val(),
				municipio:$("#txtmunicipio").val(),
				estado:$("#txtestado").val(),
				grupo_sanguineo:$("#txtgrupo_sanguineo").val(),
				id_doctor:$("#txtid_doctor").val(),
				id_atencion_medica:$("#txtid_atencion_medica").val(),
				id_antecedente:$("#txtid_antecedente").val(),
				pais:$("#txtpais").val()},

	function (data){
		$("#Respuesta").html(data);
	});
}