<?php 
	require_once("clases/AccesoDatos.php");
	require_once("clases/medico.php");
	$arrayDemedicos=medico::BuscarTodosLosMedicos();

 ?>
DOCTOR: <select id="listmedico">
 <?php 
foreach ($arrayDemedicos as $medico) {
	echo"<option value='$medico->id'>$medico->especialidad($medico->apellido-$medico->nombre)</option>";
}

//$mod_date = strtotime($date."+ 2 days");
?>
</select>

<h6 >FECHA:</h6><input type="text" id="fecha" value="<?php echo date("Y-m-d")  ?>" disabled>
<li><a onclick="ActualizarIdMedico(listmedico.options[listmedico.selectedIndex].value,document.getElementById('fecha').value)" class="btn">EXCEL</a></li>

