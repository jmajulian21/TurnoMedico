<?php 
	require_once("clases/AccesoDatos.php");
	require_once("clases/medico.php");
	$arrayDemedicos=medico::TraerEstadistica();
	//echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2>";
?>
 
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
<table id="datatable">
    <thead>
        <tr>
            <th></th>
            <th>Turnos</th>
        </tr>
    </thead>
    <tbody>
<?php 
//' '.$rows["medico"]
foreach ($arrayDemedicos as $rows) {
	echo"<tr>
			<th>".$rows["apellido"]."</th>
			<td>".$rows["cantidad"]."</td>
		  </tr>  ";
        }
		?>
	</tbody>
</table>
<!--</div>-->

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
            text: 'Estadistica de los Medicos Mas Solicitados'
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
