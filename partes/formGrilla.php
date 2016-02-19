
<?php 
	require_once("clases/AccesoDatos.php");
	require_once("clases/turno.php");
	$arrayDeturnos=turno::TraerTodoLosturnos();

 ?>
<script type="text/javascript">
$("#content").css("width", "900px");
</script>

		<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>---</th><th>Especialidad</th><th>Apellido</th><th>Nombre</th><th>Paciente</th><th>Apellido</th><th>Nombre</th><th>----</th><th>Fecha        </th><th>Hora       </th>
		</tr>
	</thead>
	<tbody>

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
	</tbody>
</table>



