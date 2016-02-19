<?php
//session_start();
if(isset($_SESSION['registrado']))
	if($_SESSION['registrado']=='admin'){
?>
<h4 class="widgettitle">Botones ABM</h4>
			<ul>
				<li><a onclick="Mostrar('MostrarEstadisticas')" class=" btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-th">&nbsp;</span>Estadistica_1.....</a></li>
				<li><a onclick="Mostrar('MostrarGrilla')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-th">&nbsp;</span>Turnos Medicos.</a></li>
				<li><a onclick="Mostrar('MostarTurnosMedicos')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-th">&nbsp;</span>TurnosXMedico</a></li>
				<li><a onclick="Mostrar('MostrarGrillaP')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-th">&nbsp;</span>Pacientes.........</a></li>
				<li><a onclick="Mostrar('MostrarFormAlta')" class="btn-lg MiBotonUTN" ><span class="glyphicon glyphicon-plus-sign">&nbsp;</span>Alta Medicos.....</a></li>
			</ul>
	</section>
<script type="text/javascript">
 MostarBotonesUsuario();</script>
<?php
}else{ 
?>
<script type="text/javascript">
 MostarBotonesUsuario();</script>
 <?php
} 
?>

