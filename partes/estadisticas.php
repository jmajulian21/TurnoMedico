<?php 
	require_once("clases/AccesoDatos.php");
	require_once("clases/medico.php");
	$arrayDemedicos=medico::TraerEstadistica();
	//echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";
?>
 
<table class="table" id="datatable" style=" background-color: beige;">
	<!--<thead>
		<tr>
			<th>cantante</th><th>disco</th><th>año</th>
		</tr>
	</thead>-->
	<tbody>
<div id='container'></div>

<?php 

foreach ($arrayDemedicos as $rows) {
	echo"<tr>
			<td>".$rows["especialidad"]."</td>
            <td>".$rows["apellido"]."</td>
            <td>".$rows["nombre"]."</td>
			<td>".$rows["cantidad"]."</td>
		  </tr>  ";
        }
		?>
	</tbody>
</table>
<a onClick="MostrarLogin()'" class='btn btn-info'>Pagina Principal</a>
<script type="text/javascript">

$(function () {
    $('#container').highcharts({
        data: {
            table: 'datatable'
        },
        chart: {
            type: 'column'
        },
        title: {
            text: 'Data extracted from a HTML table in the page'
        },
        yAxis: {
            allowDecimals: false,
            title: {
                text: 'Units'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + '</b><br/>' +
                    this.point.y + ' ' + this.point.name.toLowerCase();
            }
        }
    });
});

</script>
