<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- disable iPhone inital scale -->
<meta name="viewport" content=" initial-scale=1.0">

<title>UTN FRA</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--final de Estilos-->
          <meta name="viewport" content="width=device-width, initial-scale=1">
      
       
<!-- main css -->
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/media-queries.css" rel="stylesheet" type="text/css">
<link href="css/ingreso.css" rel="stylesheet">

<!-- media queries css -->
 <link rel="stylesheet" href="bower_components/bootstrap-css/css/bootstrap.min.css">
 <script src="bower_components/jquery/dist/jquery.min.js"></script>

 <link rel="icon" href="http://www.octavio.com.ar/favicon.ico">

<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesLogin.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
<script type="text/javascript" src="js/geolocalizacionCommon.js"></script>
<script type="text/javascript" src="js/moduloGeolocalizacion.js"></script>
<script type="text/javascript" src="js/funcionesMapa.js"></script>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
 <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
</head>

<body>
 <canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
    <script type="text/javascript" src="main.js"></script>


<div id="pagewrap">

	<header id="header">

		<hgroup>
			<h1 id="site-logo"><a href="#">Turnos Medicos</a></h1>
			<h2 id="site-description">Cunsultoria Medica</h2>
		</hgroup>

		<nav>
			<ul id="main-nav" class="clearfix">
				<li><a onclick="Mostrar('MostarPaciente')" class="btn">Solicitar Turno</a></li>
				<li><a onclick="MostrarLogin()"  class="btn">Administrador</li>
				<!--<li><a onclick="Mostrar('MostrarGrilla')" class="btn">Listado de Votaciones</a> </li>-->
				
			</ul>
			<!-- /#main-nav --> 
		</nav>

		<form id="searchform">
			
		</form>

	</header>
	<!-- /#header -->
	
	<div id="content" >

		<article  class="post clearfix">

			<header  >
				<h1 class="post-title"><a href="#">Julian.Moreno</a></h1>
				<p class="post-meta"><time class="post-date" datetime="2011-05-08" pubdate>2015</time> <em>en</em> <a href="#">UTN FRA</a></p>
			</header>
			<hr>
			<div id="principal">


			</div>		

		</article>
		<!-- /.post -->

	</div>
	<!-- /#content --> 
	
	
	<aside id="sidebar">

		<div id="botonesABM">
				<!--contenido dinamico cargado por ajax-->
		</div>
		<!-- /.widget -->

		<section class="widget clearfix" >
			<h4 class="widgettitle">informe </h4>
				<div id="informe">
				<!--contenido dinamico cargado por ajax-->
				</div>
			
		</section>
		<!-- /.widget -->
						
	</aside>
	<!-- /#sidebar -->


	<footer id="footer">
	
		
	</footer>
	<!-- /#footer --> 
	
</div>
<!-- /#pagewrap -->

</body>
</html>

<!--<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/alphabet.js"></script>
  </head>
  <body>
    <canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="http://s3.amazonaws.com/codecademy-content/courses/hour-of-code/js/bubbles.js"></script>
    <script type="text/javascript" src="main.js"></script>
  </body>
</html>-->




