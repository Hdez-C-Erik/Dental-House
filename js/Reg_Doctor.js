function CapturaDatosDoctor(){
	var url = "Reg_Doctor_Resp.php";
	$.post(url,{
				nombre:$("#txtnombre").val(),
				apellido_paterno:$("#txtapellido_paterno").val(),
				apellido_materno:$("#txtapellido_materno").val(),
				genero:$("#txtgenero").val(),
				telefono:$("#txttelefono").val(),
				movil:$("#txtmovil").val(),
				email:$("#txtemail").val(),
				fecha_nacimiento:$("#txtfecha_nacimiento").val(),
				especialidad:$("#txtespecialidad").val(),
				cedula_profesional:$("#txtcedula_profesional").val(),
				domicilio:$("#txtdomicilio").val(),
				municipio:$("#txtmunicipio").val(),
				estado:$("#txtestado").val(),
				pais:$("#txtpais").val()},

	function (data){
		$("#Respuesta").html(data);
	});
}