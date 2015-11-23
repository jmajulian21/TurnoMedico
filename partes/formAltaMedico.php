
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

    <div class="container">

      <form class="form-ingreso" onsubmit="AltaMedico();return false">
        <h2 class="form-ingreso-heading">Alta Medico</h2>

         <label for="cantante" class="sr-only">Especialidad</label>
        Especialidad: <input type="text"  id="especialidad" title="Se necesita un especialidad" class="form-control" required="" autofocus="">
        <br>
        <label for="cantante" class="sr-only">Nombre</label>
        NOMBRE: <input type="text"  id="nombre" title="Se necesita un Nombre" class="form-control" required="" autofocus="">
        <br>
        <label for="titulo" class="sr-only">Apellido</label>
        APELLIDO: <input type="text"    id="apellido" title="Se necesita un Apellido"  class="form-control" required="" autofocus="">
        <br>
        <label for="direccion" class="sr-only" hidden>direccion</label>
        Direccion: <input type="text" id="direccion" name="direccion"  title="Se necesita un direccion" class="form-control" required="" autofocus="">
        <br>
        Localidad:<select id="localidad">
                      <option value="Luis Guillon">Luis Guillon</option>
                      <option value="Monte Grande">Monte Grande</option>
                      <option value="Banfield">Banfield</option>
                      <option value="Lanus">Lanus</option>
                      <option value="Gerli">Gerli</option>
              </select>
              <br>
              <br>
        <!--<label for="provincia" class="sr-only" hidden>Provincia</label>
        Provincia: <input type="text" id="provincia" name="provincia"  title="Se necesita un provincia" class="form-control" required="" autofocus="">-->
        <br>
       <button onClick="parent.location='index.php'"  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar</button>
        
      </form>
     <a onClick="MostrarLogin()" class='btn btn-info'>Volver Pagina Anterior</a>
    </div> <!-- /container -->