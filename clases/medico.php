<?php
class medico
{
	public $id;
 	public $especialidad;
  	public $apellido;
  	public $nombre;
  	public $direccion;
  	public $localidad;
  	//public $provincia;

	
  
	 public function GuardarMedico()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into medicos (especialidad,apellido,nombre,direccion,localidad,provincia)values('$this->especialidad','$this->apellido','$this->nombre','$this->direccion','$this->localidad','Buenos Aires')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}

  	public static function TraerTodoLosMedicos()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from medicos");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "medico");		
	}

	public function mostrarMedico()
	{
	  	return $this->especialidad."  ".$this->apellido."  ".$this->nombre."  ".$this->direccion." ".$this->localidad." ".$this->provincia;
	}

	public static function BuscarMedico($id)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("select * from medicos where id='$id'");
		$consulta->execute();			
		return $consulta->fetchObject("medico");		
	}

	public static function TraerEstadistica() 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select count(t.id_medico) as cantidad, m.especialidad,m.apellido,m.nombre from turnos t inner join medicos m on m.id=t.id_medico group by m.especialidad,m.apellido,m.nombre desc limit 5");
			$consulta->execute();			
			return $consulta->fetchAll();		
	}
	
}