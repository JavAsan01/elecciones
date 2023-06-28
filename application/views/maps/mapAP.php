<main>
	<h1 class="text-center">REPORTE DE CANDIDATOS A ASAMBLEISTA PROVINCIAL</h1>
	<div class="row">
		<div class="col-md-12">
			<div id="mapaLugaresAP" style="height:600px; width:100%; border:2px solid black;"></div>
		</div>
	</div>

<script type="text/javascript">

function initMap()
{
	var centro= new google.maps.LatLng(-1.448928511784908, -78.5226672915723);
	//Permite construir el mapa
	var mapaLugaresAsamP= new google.maps.Map(
		document.getElementById('mapaLugaresAP'), //Primer parametro que se captura con su ID
		{
			//Configuracion JSON JavaScript Object
			center:centro,
			zoom:6.8,
			mapTypeId:google.maps.MapTypeId.HYBRID
		}
	);
	//Validacion
	<?php if($lugaresAsamP): ?>
		<?php foreach ($lugaresAsamP as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombres_can; echo ' - Partido Político ' ;echo $lugarTemporal->movimiento_can;?>",
			icon:"<?php echo base_url();?>/assets/img/mark/markAzul.png",
			map:mapaLugaresAsamP
		});
		<?php endforeach; ?>
	<?php endif; ?>
	}//Cierre de la funcion initMap
</script>
</main>
