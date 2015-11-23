<?php
class paciente
{
	public $id;
 	public $nombre;
  	public $apellido;
  	public $sexo;
  	public $dni;

  	
	 public function GuardarPaciente()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into pacientes (nombre,apellido,sexo,dni)values('$this->nombre','$this->apellido','$this->sexo','$this->dni')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	public function mostrarPaciente()
	{
	  	return $this->nombre."  ".$this->apellido."  ".$this->dni."  ".$this->sexo;
	}

}
?>