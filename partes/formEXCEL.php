<?php
header('Content-type: application/vnd.ms-excel');
header("Content-Disposition: attachment; filename=nombre_del_archivo.xls");
header("Pragma: no-cache");
header("Expires: 0");
require_once("../clases/medico.php");
require_once("../clases/AccesoDatos.php");
require_once("../clases/turno.php");

$medico=medico::BuscarMedico($_SESSION['id_medico']);
$fecha=$_SESSION['fecha'];;
//$arrayDeturnos=turno::TraerTodoLosTurnosPorMedicos($medico->id);
$arrayDeturnos=turno::TraerTodoLosTurnosPorMedicosyDia($medico->id,$fecha);
//$arrayDeturnos=turno::TraerTodoLosturnos();
//backtop="5%" backbottom="5%" backleft="5%" backright="5%"
?>
<page>
	<!--<img src="../imagenes/Capture.jpg" WIDTH='200' HEIGTH='200' align=right>	-->	
		<h1>Hospital JM</h1>
			<h1>Planilla de Turnos</h1>
			<?php
			echo($medico->mostrarMedico());
			?>
	<table border="2" align="left" cellspacing="0" bordercolor="#000000" WIDTH='20%' HEIGTH='20%'>

		<tr>
			<th WIDTH='150'>Paciente</th><th WIDTH='150'>Apellido</th><th WIDTH='150'>Nombre</th><th WIDTH='150'>Dni</th><th WIDTH='150'>Estado</th>
		</tr>

			<?php
				
				$x=0;
				foreach ($arrayDeturnos as $turno) {
					$x++;
					echo"<tr>
       						<td style='border: 1px'>$x</td>
            				<td style='border: 1px'>$turno->_apellido</td>
            				<td style='border: 1px'>$turno->_nombre</td>
            				<td style='border: 1px;'>$turno->dni</td>
            				<td style='border: 1px;'></td>
					 	</tr>";
				}
			?>
		</table>	
        <br>
        <br>
        <br>
		<h6 align="right">-----------------------------------------------------------------------------</h6>
		<h5 align="right">FIRMA</h5>	
</page>
<!--<?php
/*require_once("clases/AccesoDatos.php");
require_once("clases/turno.php");
$arrayDeturnos=turno::TraerTodoLosturnos();
 ?>
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>---</th><th>Especialidad</th><th>Apellido</th><th>Nombre</th><th>Paciente</th><th>Apellido</th><th>Nombre</th><th>----</th><th>Fecha        </th><th>Hora       </th>
		</tr>
	</thead>
<?php 
foreach ($arrayDeturnos as $turno) {
	echo"<tr>
			<td bgcolor='yellow'>Medico</td>
			<td>$turno->especialidad</td>
			<td>$turno->apellido</td>
            <td>$turno->nombre</td>
            <td bgcolor='yellow'>Paciente</td>
            <td>$turno->_apellido</td>
            <td>$turno->_nombre</td>
            <td bgcolor='yellow'>Fecha</td>
            <td>$turno->fecha</td>
            <td>$turno->hora</td>
			
		</tr>   ";
}
		 ?>
</table>*/

?>