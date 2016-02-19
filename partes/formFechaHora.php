
<!DOCTYPE>
<html>
<body>
	<form class="" onsubmit="GuardarTurno();return false">
		<h4>Fecha Y hora Del turno</h4>
		<?php
		$date=date("d/m/Y,");
		$st_date = date('Y-m-d', strtotime('+20 day'));
		?>
		<br>
		   	FECHA: <input type="date" id="fecha" size="12"  value="<?php echo $date?>" min="<?php echo $date?>"/>
		   	<br>
		   	<br>
 			HORA: <select id='hora'>
 					<option value='8:00'>8:00</option>
 					
 					<option value='9:00'>9:00</option>
 					
 					<option value='10:00'>10:00</option>
 					
 					<option value='11:00'>11:00</option>
 					
 					<option value='12:00'>12:00</option>
 					
 					<option value='13:00'>13:00</option>
 					
 					<option value='14:00'>14:00</option>
 					
 					<option value='15:00'>15:00</option>
 					
 					<option value='16:00'>16:00</option>

 					<option value='16:00'>17:00</option>
 				  </select>
 				  <br>
 				  <br>
 	<br>
 	<br>
 	<button onclick="window.location=('partes/formPDF.php')" class="btn btn-lg btn-success btn-block" type="submit"  style="height:45px; width:200px">Guardar</button>
 	<br>
 	<!--<a onClick="parent.location='index.php'" class='btn btn-info'>GuardarIndex</a>-->
 	<button type="button" id="btnMostrar" class="btn btn-primary" onclick="Mostrar('MostrarMedicos')" style="height:45px; width:200px">Volver Pagina Anterior</button>
 </form>

</body>
</html>



<!--<a onclick=Mostrar('MostarMedicos') class='btn btn-info'>Volver Pagina Anterior</a>-->