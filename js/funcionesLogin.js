function validarLogin()
{
		var varUsuario=$("#correo").val();
		var varClave=$("#clave").val();
		//var recordar=$("#recordarme").is(':checked');
		
$("#informe").html("<img src='imagenes/ajax-loader.gif' style='width: 30px;'/>");
	

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			correo:varUsuario,
			clave:varClave
		}
	});


	funcionAjax.done(function(retorno){
		//alert(retorno);
			if(retorno!="No-esta"){	
				//MostarBotones();
				MostrarLogin();

				//$("#BotonLogin").html("Ir a salir<br>-Sesión-");
				//$("#BotonLogin").addClass("btn btn-danger");				
				//$("#usuario").val("usuario: "+retorno);
			}else
			{
				$("#informe").html("usuario o clave incorrecta");	
			}
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	
}
function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			MostarBotonesUsuario();
			MostarBotones();
			$("#principal").html("");
			$("#usuario").val("Sin usuario.");
			$("#BotonLogin").html("Login<br>-Sesión-");
			$("#BotonLogin").removeClass("btn-danger");
			$("#BotonLogin").addClass("btn-primary");
			$("#main-nav").html('');
			
	});	
}
function MostarBotones()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarBotones"}
	});
	funcionAjax.done(function(retorno){
		$("#botonesABM").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}
function MostarBotonesUsuario()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarBotonesUser"}
	});
	funcionAjax.done(function(retorno){
		$("#main-nav").html(retorno);
		//$("#informe").html("Correcto BOTONES!!!");	
	});
}

function MostrarLogin()
{
		//alert("queMostrar");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);	
		
	});
	funcionAjax.fail(function(retorno){
		//$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}



