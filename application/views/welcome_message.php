<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Lugares Turisticos</title>
	</head>
	<!-- CDN DE JQuery -->
	<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
	<!-- CDN DE BOOTSTRAP -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- IMPORTACION DE API KEY DE GOOGLE MAPS -->
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBcLcLBEAz0-5WQAt9Njj5kFlYuj-NUoSA&libraries=places&callback=initMap"></script>
	<body>
		<br>
		<h1 class="text-center">LUGARES TURISTICOS</h1>
		<div class="row">
			<div class="col-md-12">
				<div id="mapaLugares" style="height:500px; width:100%; border:2px solid black;"></div>
			</div>
		</div>

	<script type="text/javascript">
		function initMap()
		{
			var centro= new google.maps.LatLng(-0.9309750270146707, -78.61214215897958);
			//Permite construir el mapa
			var mapaLugaresTuristicos= new google.maps.Map(
				document.getElementById('mapaLugares'), //Primer parametro que se captura con su ID
				{
					//Configuracion JSON JavaScript Object
					center:centro,
					zoom:3,
					mapTypeId:google.maps.MapTypeId.HYBRID
				}
			);
			//Validacion
			<?php if($lugares): ?>
				<?php foreach ($lugares as $lugarTemporal): ?>
				var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_lug;?>,<?php echo $lugarTemporal->longitud_lug;?>);
				var marcador=new google.maps.Marker({
					position:coordenadaTemporal,
					title:"<?php echo $lugarTemporal->nombre_lug;?>",
					map:mapaLugaresTuristicos
				});
				<?php endforeach; ?>
			<?php endif; ?>
		}//Cierre de la funcion initMap
	</script>
	</body>
</html>
