
<?php
session_start();


class turno
{
	
	public $especialidad;
	public $apellido;
	public $nombre;
	public $_apellido;
	public $_nombre;
	public $fecha;
	public $hora;
	public $dni;
	

	public static function GuardarTurnoMedico($idpaciente,$idmedico,$fecha,$hora)
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into turnos(id_paciente,id_medico,fecha,hora)values('$idpaciente','$idmedico','$fecha','$hora')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

	public static function mostrarTurno()
	{
			require_once("clases/medico.php");
			require_once("clases/paciente.php");
			$mostrar;
			
			if(isset($_SESSION['medico_actual']) && isset($_SESSION['fecha_actual']) && isset($_SESSION['hora_actual']))//isset($_SESSION['paciente_actual']) && 
			{
				$paciente=$_SESSION['id'];
				$medico=$_SESSION['medico_actual'];
				$fecha=$_SESSION['fecha_actual'];
				$hora=$_SESSION['hora_actual'];
				turno::GuardarTurnoMedico($paciente,$medico->id,$fecha,$hora);
				$mostrar="Fecha del Turno ".$fecha."  ".$hora." Paciente= ".$paciente." Medico= ".$medico->mostrarMedico();
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

		  public static function TraerTodoLosTurnosPorMedicos($id)
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select p.apellido as _apellido,p.nombre as _nombre,p.dni from pacientes p inner join turnos t on t.id_paciente=p.id where t.id_medico='$id'");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "turno");		
	}
			 public static function TraerTodoLosTurnosPorMedicosyDia($id,$fecha)
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select p.apellido as _apellido,p.nombre as _nombre,p.dni from pacientes p inner join turnos t on t.id_paciente=p.id where t.id_medico='$id' and t.fecha='$fecha'");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "turno");		
	}
}

?>



	
	


