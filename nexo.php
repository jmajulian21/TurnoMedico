<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/paciente.php");
require_once("clases/medico.php");
require_once("clases/turno.php");
$queHago=$_POST['queHacer'];


switch ($queHago) {
	case 'Mensaje':
	echo("Contacto=julian.a.moreno@hotmail.com<br>Telefono=4353-0220");
	break;
	case 'MostrarGrillaP':
	 include("partes/formGrillaP.php");
	break;
	case 'noticias':
	 include("partes/noticias.php");
	break;
	case 'video':
	 include("partes/video.html");
	break;
	case 'Organizacion':
	include("partes/JM_SM.php");
	break;
	case 'email':
	include("partes/email.php");
	break;
	case 'MostrarLogin':
			include("partes/formLogin.php");
	break;
	case 'MostrarMedicos':
			include("partes/formMedico.php");
		break;
	case 'MostarPaciente':
			include("partes/formPaciente.php");
		break;
	case 'formFecha':
		include("partes/formFechaHora.php");
	break;
	 case 'VerEnMapa':
        include("partes/formMapa.php");
	break;
	case 'MostarBotones':
			include("partes/botonesABM.php");
		break;
	case 'MostrarGrilla':
		include("partes/formGrilla.php");
	break;
	case "MostarBotonesUser":
	include("partes/botonesUser.php");
	break;
	case 'MostrarEstadisticas':
       	include("partes/estadisticas.php");
    break;
      case 'MostrarFormAlta':
       		include("partes/formAltaMedico.php");
       break;
       case 'MostarTurnosMedicos':
       	//include("tcpdf/examples/example_009.php");
       		include("partes/TurnoMedico.php");
       break;
       
	case 'GuardarPaciente':
			session_start();
            $paciente=new paciente();
			$paciente->nombre=$_POST['nombre'];
			$paciente->apellido=$_POST['apellido'];
			$paciente->dni=$_POST['dni'];
			$paciente->sexo=$_POST['sexo'];
			$paciente->correo=$_POST['correo'];
			$paciente->clave=$_POST['clave'];
			$paciente->GuardarPaciente();

	break;
	case 'GuardarMedico':
		$medico=medico::BuscarMedico($_POST['id']);
		$_SESSION['medico_actual']=$medico;
	break;
	case 'GuardarTurno':
		$_SESSION['fecha_actual']=$_POST['fecha'];
		$_SESSION['hora_actual']=$_POST['hora'];
		echo(turno::mostrarTurno());
		
	break;
	 case 'AltaMedico':
            $medico=new medico();
            $medico->especialidad=$_POST['especialidad'];
			$medico->nombre=$_POST['nombre'];
			$medico->apellido=$_POST['apellido'];
			$medico->direccion=$_POST['direccion'];
			$medico->localidad=$_POST['localidad'];
			//$medico->provincia=$_POST['provincia'];
			$medico->GuardarMedico();
	break;
	default:
		# code...
		break;
}
 /*case 'validarUsuario':
			$usuario=$_POST['usuario'];
            $clave=$_POST['clave'];
            $recordar=$_POST['recordarme'];	
        
			if(validadora::validarUsuario($usuario, $clave, $recordar))
               echo "ok";
            else
               echo "No-esta";
           
           break;*/
 ?>
