function GuardarPaciente()
{
        var id = $("#id").val()
		var nombre=$("#nombre").val();
		var apellido=$("#apellido").val();
        var dni=$("#dni").val();
		var sexo=$('input:radio[name=sexo]:checked').val();
		


		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"POST",
		data:{
			queHacer:"GuardarPaciente",
			nombre:nombre,
			apellido:apellido,
			dni:dni,
			sexo:sexo,
            id: id
		}
	});
	funcionAjax.done(function(retorno){
		$("#informe").html("Correcto Form login!!!");	
		Mostrar('MostrarMedicos');
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
		$("#informe").html(retorno.responseText);	
	});	
}
function GuardarMedico(idparametro)
{
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"POST",
		data:{
			queHacer:"GuardarMedico",
            id: idparametro
		}
	});
	funcionAjax.done(function(retorno){
		$("#informe").html("Correcto Form login!!!");	
		Mostrar('formFecha');
	});
	funcionAjax.fail(function(retorno){	
		//alert(retorno);
		$("#informe").html(retorno.responseText);	
	});	

}
function GuardarTurno()
{
		var fecha = $("#fecha").val()
		var hora = $("#hora").val()
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"POST",
		data:{
			queHacer:"GuardarTurno",
            fecha:fecha,
            hora:hora
		}
	});
	funcionAjax.done(function(retorno){
		$("#informe").html("Correcto Form login!!!");	
		parent.location=index.php;
	});
	funcionAjax.fail(function(retorno){	
		//alert(retorno);
		$("#informe").html(retorno.responseText);	
	});	
}
function AltaMedico()
{
        var id = $("#id").val()
		var especialidad=$("#especialidad").val();
		var nombre=$("#nombre").val();
		var apellido=$("#apellido").val();
        var localidad=$("#localidad").val();
        var direccion=$("#direccion").val();
		//var provincia=$("#provincia").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"POST",
		data:{
			queHacer:"AltaMedico",
			especialidad:especialidad,
			nombre:nombre,
			apellido:apellido,
			direccion: direccion,
            localidad:localidad,
            //provincia:provincia,
            id: id
		}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
			//deslogear();
		Mostrar('MostrarPrincipal');
		$("#principal").html(":(");
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		//alert(retorno);
		$("#informe").html(retorno.responseText);	
	});	
}