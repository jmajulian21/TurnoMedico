<?php 
  require_once("clases/AccesoDatos.php");
  require_once("clases/medico.php");
  $arrayDeMedicos= medico::TraerTodoLosMedicos();
 
 ?>



<script type="text/javascript">
$("#content").css("width", "900px");
</script>



<h2 class="form-ingreso-heading">Medicos</h2>
<table class="table"  style=" background-color: beige;">
  <thead>
    <tr>
      <th>Especialidad</th><th>Apellido</th><th>Nombre</th><th>Direccion</th><th>Localidad</th><th>Provincia</th><th>Solicitud</th><th>Ver</th>
  </thead>
  <tbody>

   <?php 

foreach ($arrayDeMedicos as $medico) {
  $l = '"'.$medico->provincia.'"'.',"'.$medico->localidad. '"'.',"'.$medico->direccion. '"'.',"'.$medico->especialidad.'"';
  echo"<tr>
            <td>$medico->especialidad</td>
            <td>$medico->apellido</td>
            <td>$medico->nombre</td>
            <td>$medico->direccion</td>
            <td>$medico->localidad</td>
            <td>$medico->provincia</td>
            <td><a onclick='GuardarMedico($medico->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Solictar Turno</a></td>
            <td><a onclick='VerEnMapa($l)' class='btn btn-info'>Ver en mapa</a></td>
    </tr>   ";
}
     ?>
     
  </tbody>
</table>
<a onclick=Mostrar('MostarPaciente') class='btn btn-info'>Volver Pagina Anterior</a>

