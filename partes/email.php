<?php
if (!isset($_POST['email'])) {
session_start();
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
<label>
<input name="nombre" type="hidden" value="<?php echo($_SESSION['registrado']) ?>"/>
</label>
<label>
<input name="telefono" type="hidden" value="Desconocido"/>
</label>
<label>
<input name="email" type="hidden" value="<?php echo($_SESSION['correo']) ?>"/>
</label>
<label>
Mensaje:
<textarea name="mensaje" rows="6" cols="50"></textarea>
</label>
<input type="reset" value="Borrar" />
<input type="submit" value="Enviar" />
</form>
<?php
}else{
$mensaje="Mensaje del formulario de contacto de nnatali.com";
$mensaje.= "\nNombre: ". $_POST['nombre'];
$mensaje.= "\nEmail: ".$_POST['email'];
$mensaje.= "\nTelefono: ". $_POST['telefono'];
$mensaje.= "\nMensaje: \n".$_POST['mensaje'];
$destino= "julian.moreno@globallogic.com";
$remitente = $_POST['email'];
$asunto = "Mensaje enviado por: ".$_POST['nombre'];
mail($destino,$asunto,$mensaje,"FROM: $remitente");
?>
<p><strong>Mensaje enviado.</strong></p>
<?php
}
?>
