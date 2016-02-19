
<?php
session_start();
require_once("../clases/AccesoDatos.php");
require_once("../clases/paciente.php");
$retorno;

if($_POST['correo']=='admin@admin.com' && $_POST['clave']=='1234')
{
$retorno="Bienvenido: Aministrador Moreno";
$_SESSION['registrado']='admin';
}
else
{
$pacienteActual=paciente::Loginpaciente($_POST['correo'],$_POST['clave']);
if($pacienteActual)
{
	$_SESSION['registrado']=$pacienteActual->apellido.', '.$pacienteActual->nombre;
	$_SESSION['correo']=$pacienteActual->correo;
	$_SESSION['clave']=$pacienteActual->clave;
	$_SESSION['id']=$pacienteActual->id;
	$retorno="Bienvenido: ".strtoupper($pacienteActual->apellido.', '.$pacienteActual->nombre);
}
else
{
	$retorno="Contraseña o correo Incorrecta";
}
}



echo $retorno;
?>