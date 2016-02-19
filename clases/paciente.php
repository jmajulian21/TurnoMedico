<?php
class paciente
{
	public $id;
 	public $nombre;
  	public $apellido;
  	public $sexo;
  	public $dni;
  	public $correo;
  	public $clave;

	 public function GuardarPaciente()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into pacientes (nombre,apellido,sexo,dni,correo,clave)values('$this->nombre','$this->apellido','$this->sexo','$this->dni','$this->correo','$this->clave')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public function mostrarPaciente()
	{
	  	return $this->nombre."  ".$this->apellido."  ".$this->dni."  ".$this->sexo;
	}

		public static function Loginpaciente($correo,$clave) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from pacientes where correo=:correo and clave=:clave");
			$consulta->bindValue('correo', $correo, PDO::PARAM_STR);
			$consulta->bindValue('clave', $clave, PDO::PARAM_STR); 
			$consulta->execute();
			$usuarioBuscado= $consulta->fetchObject('paciente');
			return $usuarioBuscado;				

			
	}
	public static function BuscarPaciente($id)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from pacientes where id='$id'");
		$consulta->execute();			
		return $consulta->fetchObject("paciente");		
	}

		public static function TraerTodoLospacientes()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from pacientes");
		$consulta->execute();			
		return $consulta->fetchAll(PDO::FETCH_CLASS, "paciente");		
	}
}
?>