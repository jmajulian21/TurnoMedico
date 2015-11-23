<?php 
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


$retorno;

if($usuario=="julian@admin.com.ar" && $clave=="1234")
{			
	$_SESSION['registrado']="julian";
	$retorno=" ingreso";

	
}else
{
	$retorno= "No-esta";
}

echo $retorno;
?>