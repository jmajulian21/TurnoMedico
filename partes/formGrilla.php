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
			<th>Medico</th><th>Especialidad</th><th>Apellido  </th><th>Nombre  </th><th>Paciente</th><th>Apellido  </th><th>Nombre  </th><th>FechaTurno</th><th>Fecha        </th><th>Hora       </th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDeturnos as $turno) {
	echo"<tr>
			<td bgcolor='yellow'>MEDICO</td>
			<td>$turno->especialidad</td>
			<td>$turno->apellido</td>
            <td>$turno->nombre</td>
            <td bgcolor='yellow'>PACIENTE</td>
            <td>$turno->_apellido</td>
            <td>$turno->_nombre</td>
            <td bgcolor='yellow'>FECHA</td>
            <td>$turno->fecha</td>
            <td>$turno->hora</td>
			
		</tr>   ";
}
		 ?>
	</tbody>
</table>
<a onClick="MostrarLogin()" class='btn btn-info'>Volver Pagina Anterior</a>
