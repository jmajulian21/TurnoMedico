
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

    <div class="container">

      <form class="form-ingreso" onsubmit="GuardarPaciente();return false">
        <h2 class="form-ingreso-heading">Paciente</h2>

        <label for="cantante" class="sr-only">Nombre</label>
        NOMBRE: <input type="text"  id="nombre" title="Se necesita un Nombre" class="form-control" required="" autofocus="">
        <br>
        <label for="titulo" class="sr-only">Apellido</label>
        APELLIDO: <input type="text"    id="apellido" title="Se necesita un Apellido"  class="form-control" required="" autofocus="">
        <br>
        <label for="dni" class="sr-only" hidden>dni</label>
        DNI: <input type="text" id="dni" name="dni"  title="Se necesita un dni" class="form-control" required="" autofocus="">
        <br>
         SEXO:<label for="titulo" class="sr-only">Sexo</label>
         <br>
          
         <input type="radio" name="sexo" value="F" checked>FEMENINO
          <input type="radio" name="sexo" value="M">MASCULINO
       <br>
        <br>
        <label for="correo" class="sr-only">Correo electrónico</label>
        CORREO: <input type="email" id="correo" class="form-control" >
        <br>
        <label for="clave" class="sr-only">Clave</label>
        CLAVE: <input type="password" id="clave" minlength="4" class="form-control" >

        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span> Guardar </button>

      </form>

    </div> <!-- /container -->
<!--<a onClick="parent.location='index.php'" class='btn btn-info'>Pagina Principal</a>-->

  