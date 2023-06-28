<main>
	<h1 class="text-center">REPORTE DE CANDIDATOS A ASAMBLEISTAS NACIONALES</h1>
	<div class="row">
		<div class="col-md-12">
			<div id="mapaLugaresA" style="height:600px; width:100%; border:2px solid black;"></div>
		</div>
	</div>

<script type="text/javascript">

function initMap()
{
	var centro= new google.maps.LatLng(-1.448928511784908, -78.5226672915723);
	//Permite construir el mapa
	var mapaLugaresAsam= new google.maps.Map(
		document.getElementById('mapaLugaresA'), //Primer parametro que se captura con su ID
		{
			//Configuracion JSON JavaScript Object
			center:centro,
			zoom:6.8,
			mapTypeId:google.maps.MapTypeId.HYBRID
		}
	);
	//Validacion
	<?php if($lugaresAsam): ?>
		<?php foreach ($lugaresAsam as $lugarTemporal): ?>
		var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can;?>,<?php echo $lugarTemporal->longitud_can;?>);
		var marcador=new google.maps.Marker({
			position:coordenadaTemporal,
			title:"<?php echo $lugarTemporal->nombres_can; echo ' - Partido Político ' ;echo $lugarTemporal->movimiento_can;?>",
			icon:"<?php echo base_url();?>/assets/img/mark/markAmarillo.png",
			map:mapaLugaresAsam
		});
		<?php endforeach; ?>
	<?php endif; ?>
	}//Cierre de la funcion initMap
</script>
</main>
