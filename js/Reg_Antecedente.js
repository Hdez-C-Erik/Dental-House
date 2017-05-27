function CapturaDatosAntecedente(){
	var url = "Reg_Antecedente_Resp.php";
	$.post(url,{id_antecedente:$("#txtid_antecedente").val(),
				fecha_ingreso:$("#txtfecha_ingreso").val(),
				enfermedad:$("#txtenfermedad").val(),
				alergia:$("#txtalergia").val(),
				id_expediente:$("#txtid_expediente").val()
		},
	function (data){
		$("#Respuesta").html(data);
	});
}