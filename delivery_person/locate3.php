<?php
    require_once('dbconn.php');
    $query = "select * FROM map WHERE id = 1"; 
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);
	$latitude = $row["lat"];
	$longitude = $row["lon"];

    echo "<div id='map' style='height: 400px;'></div>";
?>
<!DOCTYPE html>
<html>
<head>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv492o7hlT-nKoy2WGWmnceYZLSw2UDWw"></script>
	<script>
		// Get user's location
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition);
		} else {
			alert("Geolocation is not supported by this browser.");
		}

		// Display location and shortest path on map
		function showPosition(position) {
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude;

			// Initialize map
			var mapOptions = {
				center: new google.maps.LatLng(latitude, longitude),
				zoom: 15
			};
			var map = new google.maps.Map(document.getElementById("map"), mapOptions);

			// Add marker for current location
			var currentMarker = new google.maps.Marker({
				position: new google.maps.LatLng(latitude, longitude),
				map: map,
				title: "You are here"
			});

			// Add marker for destination location
			var destinationMarker = new google.maps.Marker({
				position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
				map: map,
				title: "Destination"
			});

			// Calculate shortest path using Directions API
			var directionsService = new google.maps.DirectionsService();
			var directionsRenderer = new google.maps.DirectionsRenderer();
			directionsRenderer.setMap(map);
			var request = {
				origin: new google.maps.LatLng(latitude, longitude),
				destination: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $longitude; ?>),
				travelMode: 'DRIVING'
			};
			directionsService.route(request, function(result, status) {
				if (status == 'OK') {
					directionsRenderer.setDirections(result);
				}
			});
		}
	</script>
</head>
<body>
</body>
</html>
