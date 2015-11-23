<?php 
require_once("clases/AccesoDatos.php");
require_once("clases/paciente.php");
require_once("clases/medico.php");
require_once("clases/turno.php");
$queHago=$_POST['queHacer'];


switch ($queHago) {
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
	case 'GuardarPaciente':
			session_start();
            $paciente=new paciente();
			$paciente->nombre=$_POST['nombre'];
			$paciente->apellido=$_POST['apellido'];
			$paciente->dni=$_POST['dni'];
			$paciente->sexo=$_POST['sexo'];
			$_SESSION['paciente_actual']=$paciente;
	break;
	case 'GuardarMedico':
		$medico=medico::BuscarMedico($_POST['id']);
		$_SESSION['medico_actual']=$medico;
	break;
	case 'GuardarTurno':
		$_SESSION['fecha_actual']=$_POST['fecha'];
		$_SESSION['hora_actual']=$_POST['hora'];
		echo (turno::mostrarTurno());
	break;
	 case 'validarUsuario':
			$usuario=$_POST['usuario'];
            $clave=$_POST['clave'];
            $recordar=$_POST['recordarme'];	
        
			if(validadora::validarUsuario($usuario, $clave, $recordar))
               echo "ok";
            else
               echo "No-esta";
           
           break;

           case 'MostrarEstadisticas':
           		include("partes/estadisticas.php");
           	break;
       case 'MostrarFormAlta':
       		include("partes/formAltaMedico.php");
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

 ?>