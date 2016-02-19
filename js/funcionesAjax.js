
function Mostrar(queMostrar)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		$("#informe").html("Error!!!");	

	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function ActualizarIdMedico(nom,fecha)
{
	
	//alert(fecha);
	var funcionAjax=$.ajax({
		url:"php/ActualizarGrilla.php",
		type:"post",
		data:{
			id:nom,
			fech:fecha
		}
	});	
	funcionAjax.done(function(retorno){
		window.location=('partes/formEXCEL.php');
	});
}

function email()
{
window.open('partes/email.php');
}






