
<!DOCTYPE>
<html>
<body>
	<form class="form-ingreso" onsubmit="GuardarTurno();return false">
<h1>Fecha Y hora Del turno</h1>
	
 	FECHA: <input type="date" id="fecha" size="12"  value="<?php echo date("yyyy-MM-dd"); ?>"/>
 	HORA: <input type="time" id="hora" size="12"/>
 	<br>
 	<button onClick="parent.location='index.php'"  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar</button>
 	<!--<a onClick="parent.location='index.php'" class='btn btn-info'>Guardar</a>-->
 	<button type="button" id="btnMostrar" class="btn btn-primary" onclick="Mostrar('MostrarMedicos')" title="Guarda en un archivo de texto">Volver Pagina Anterior</button>
 </form>
</body>
</html>



<!--<a onclick=Mostrar('MostarMedicos') class='btn btn-info'>Volver Pagina Anterior</a>-->