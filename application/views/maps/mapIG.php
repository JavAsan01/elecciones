<main>
	<h1 class="text-center">REPORTE IDEOLOGIA POLITICA</h1>
	<div class="row">
		<div class="col-md-2">
			<br><br><br><br><br><br><br>
			<table class="table table-striped table-hover table-responsive" >
					<tr>
							<th class="text-center"><img src="<?php echo base_url();?>/assets/img/mark/markAzul.png"></th>
							<td class="text-center">DERECHA</td>
					</tr>
					<tr>
							<th class="text-center"><img src="<?php echo base_url();?>/assets/img/mark/markRojo.png"></th>
							<td class="text-center">IZQUIERDA</td>
					</tr>
			</table>
		</div>
		<div class="col-md-10">
			<div id="mapaLugares" style="height:600px; width:100%; border:2px solid black;"></div>
		</div>
	</div>

<script type="text/javascript">

function initMap()
{
	var centro= new google.maps.LatLng(-1.448928511784908, -78.5226672915723);
	//Permite construir el mapa
	var mapaIdeologia= new google.maps.Map(
		document.getElementById('mapaLugares'), //Primer parametro que se captura con su ID
		{
			//Configuracion JSON JavaScript Object
			center:centro,
			zoom:6.8,
			mapTypeId:google.maps.MapTypeId.HYBRID
		}
	);
	//Validacion Pre
	<?php if($lugaresDer && $lugaresIzq): ?>

		<?php foreach ($lugaresDer as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombres_can; echo ' - Partido Político: ' ; echo $lugarTemporal->movimiento_can; echo ' - Dignidad: ' ;echo $lugarTemporal->dignidad_can;?>",
			icon:"<?php echo base_url();?>/assets/img/mark/markAzul.png",
			map:mapaIdeologia
		});
		<?php endforeach; ?>

		<?php foreach ($lugaresIzq as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombres_can; echo ' - Partido Político: ' ;echo $lugarTemporal->movimiento_can; echo ' - Dignidad: ' ;echo $lugarTemporal->dignidad_can;?>",
			icon:"<?php echo base_url();?>/assets/img/mark/markRojo.png",
			map:mapaIdeologia
		});
		<?php endforeach; ?>
	<?php endif; ?>
	}//Cierre de la funcion initMap
</script>
</main>
