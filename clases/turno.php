
<?php
session_start();
require_once("clases/paciente.php");
require_once("clases/medico.php");
class turno
{
	
	public $especialidad;
	public $apellido;
	public $nombre;
	public $_apellido;
	public $_nombre;
	public $fecha;
	public $hora;
	

	public static function GuardarTurnoMedico($idpaciente,$idmedico,$fecha,$hora)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into turnos(id_paciente,id_medico,fecha,hora)values('$idpaciente','$idmedico','$fecha','$hora')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public static function mostrarTurno()
	{
			$mostrar;
			$x=1;
			if(isset($_SESSION['paciente_actual']) && isset($_SESSION['medico_actual']) && isset($_SESSION['fecha_actual']) && isset($_SESSION['hora_actual']))
			{
				$paciente=$_SESSION['paciente_actual'];
				$medico=$_SESSION['medico_actual'];
				$fecha=$_SESSION['fecha_actual'];
				$hora=$_SESSION['hora_actual'];
				$idpaciente=$paciente->GuardarPaciente();
				turno::GuardarTurnoMedico($idpaciente,$medico->id,$fecha,$hora);
				$mostrar="Fecha del Turno ".$fecha."  ".$hora." Paciente= ".$paciente->mostrarPaciente()." Medico= ".$medico->mostrarMedico();
			}
			return $mostrar;
	}

	public static function TraerTodoLosturnos()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT m.especialidad,m.apellido ,m.nombre,p.apellido as _apellido,p.nombre as _nombre,t.fecha,t.hora FROM medicos m INNER JOIN turnos t on t.id_medico=m.id INNER JOIN pacientes p on p.id=t.id_paciente;");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "turno");		
	}
	
}

?>



	
	


