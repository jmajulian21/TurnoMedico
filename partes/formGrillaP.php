
<?php 
	require_once("clases/AccesoDatos.php");
	require_once("clases/paciente.php");
	$arrayDepacientes=paciente::TraerTodoLospacientes();

 ?>
<script type="text/javascript">
$("#content").css("width", "900px");
</script>

		<table class="table"  style=" background-color: beige;" border="2" cellspacing="0" bordercolor="#000000">
			
	<thead>
		<tr>
			<th>Apellido</th><th>Nombre</th></th><th>Sexo</th><th>Dni</th><th>Correo</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDepacientes as $paciente) {
	echo"<tr>
            <td style='border: 1px'>$paciente->apellido</td>
            <td style='border: 1px'>$paciente->nombre</td>
            <td style='border: 1px'>$paciente->sexo</td>
            <td style='border: 1px'>$paciente->dni</td>
            <td style='border: 1px'>$paciente->correo</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>



