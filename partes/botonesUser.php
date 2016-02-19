<?php
if(!isset($_SESSION['registrado'])){  
?>
<ul>
				
				<li><a onclick="Mostrar('Organizacion')" class="btn"> Inicio </a></li>
				<li><a onclick="Mostrar('Mensaje')" class="btn"> Contactanos </a></li>
				<li><a onclick="Mostrar('video')" class="btn">¿ Quienes Somos ?</a></li>
				<li><a onclick="MostrarLogin()" class="btn">Iniciar Seccion</a></li>
				
</ul>
<?php }else{ ?>

				
				<li><a onclick="Mostrar('Organizacion')" class="btn"> Inicio </a></li>
				<li><a onclick="email()" class="btn"> Contactanos </a></li>
				<li><a onclick="Mostrar('video')" class="btn">¿ Quienes Somos ?</a></li>
				<li><a onclick="Mostrar('MostrarMedicos')" class="btn">Solicitar Turno</a></li>
				<li><a onclick="deslogear()" class="btn">Finalizar Session</a></li>					
		

<?php } ?>