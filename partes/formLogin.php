
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 
<?php 
 

if(!isset($_SESSION['registrado'])){  ?>
    <div id="formLogin" class="container">

      <form  class="form-ingreso" name="frm1" onsubmit="validarLogin();return false;">
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
        <label for="correo" class="sr-only">Correo electrónico</label>
        <input type="email" id="correo" name="cro"class="form-control" placeholder="Correo electrónico" required="" autofocus="" value="">
        <label for="clave" class="sr-only">Clave</label>
        <input type="password" id="clave" name="clv" minlength="4" class="form-control" placeholder="clave" required="">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      </form>
      <form  name="frm" class="form-ingreso">
         <input type="button" onclick="admin()" class="btn btn-lg btn-primary btn-block" value="Administrador"/>
         <input type="button" onclick="user()" class="btn btn-lg btn-primary btn-block" value="Usuario"/>
         </form>

         <script type="text/javascript">  
         function user(){document.frm1.cro.value = "julian.a.moreno@hotmail.com"; document.frm1.clv.value = "1234" ; } 
         function admin(){document.frm1.cro.value = "admin@admin.com";document.frm1.clv.value = "1234" ; } 
        </script> 
    </div> <!-- /container -->
    <li><a onclick="Mostrar('MostarPaciente')" class="btn">--¿No estas registrado?--</a></li>
  <?php 
 }else{ ?> 

 <script type="text/javascript">
 MostarBotones()
 </script> 

 <?php 


 
            } ?>



           
