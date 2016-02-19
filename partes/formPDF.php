<?php
require_once('../clases/medico.php');
require_once("../clases/AccesoDatos.php");
require_once("../clases/turno.php");
require_once('../clases/paciente.php');


$medico=$_SESSION['medico_actual'];
$fecha=$_SESSION['fecha_actual'];
$hora=$_SESSION['hora_actual'];
$paciente=paciente::BuscarPaciente($_SESSION['id']);

?>
	 
<page>
	<img src="../imagenes/Capture.jpg" WIDTH='200' HEIGTH='200' align=right>		
		<h1>Hospital JM</h1>
			<h1>Turno</h1>
			<?php
			echo('Presentar Este comprobante de Turno en Recepcion'.'<br>');
			//echo($paciente->mostrarPaciente());
			?>	
			<br>
			PACIENTE:
			<br>
			<table border="2" align="left" cellspacing="0" bordercolor="#000000">
				<tr>
					<th WIDTH='150'>Apellido</th><th WIDTH='150'>Nombre</th><th WIDTH='150'>Dni</th>
				</tr>
				<tr>
					<?php
            			echo"
            			<td style='border: 1px'>$paciente->apellido</td>
            			<td style='border: 1px'>$paciente->nombre</td>
            			<td style='border: 1px;'>$paciente->dni</td>"
            		?>
				</tr>
			</table>
			<br>
			MEDICO:
			<br>
			<table border="2" align="left" cellspacing="0" bordercolor="#000000">
				<tr>
					<th WIDTH='150'>Especialidad</th><th WIDTH='150'>Apellido</th><th WIDTH='150'>Nombre</th><th WIDTH='150'>Direccion</th><th WIDTH='150'>Localidad</th><th WIDTH='150'>Provincia</th>
				</tr>
				<tr>
					<?php
            			echo"
            			<td style='border: 1px'>$medico->especialidad</td>
            			<td style='border: 1px'>$medico->apellido</td>
            			<td style='border: 1px;'>$medico->nombre</td>
            			<td style='border: 1px'>$medico->direccion</td>
            			<td style='border: 1px'>$medico->localidad</td>
            			<td style='border: 1px;'>$medico->provincia</td>"
            		?>
				</tr>
			</table>
			<br>
			FECHA Y HORA:
			<br>
			<table border="2" align="left" cellspacing="0" bordercolor="#000000">
				<tr>
					<th WIDTH='150'>Fecha</th><th WIDTH='150'>Hora</th>
				</tr>
				<tr>
					<?php
            			echo"
            			<td style='border: 1px'>$fecha</td>
            			<td style='border: 1px'>$hora</td>"
            		?>
				</tr>
			</table>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
        	<table align="left">
				<tr>
					<th WIDTH='300'>-----------------------------------------------------------------------------</th><th WIDTH='400'></th><th WIDTH='300'>-----------------------------------------------------------------------------</th>
				</tr>
				<tr>
					<td align="center">Firma Del Paciente</td>
					<td></td>
					<td align="center">Firma Del Medico</td>
				</tr>
			</table>
			
</page>


<?php
$content= ob_get_clean();
require_once('../html2pdf-4.4.0/html2pdf.class.php');
$pdf=new HTML2PDF('L','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output('prueba.pdf');
?>



					

					