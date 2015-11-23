
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
		$("#botonesABM").html();
		$("#informe").html("Correcto BOTONES!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		$("#informe").html("Correcto!!!");	

	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}







