<?php
    require_once('dbconn.php');
?>
<!DOCTYPE html>
<html>
  <head>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv492o7hlT-nKoy2WGWmnceYZLSw2UDWw"></script>
    <script>
    function initMap() {
        var map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?> },
            zoom: 8
        });

        var marker = new google.maps.Marker({
            position: { lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?> },
            map: map
        });

        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();

        navigator.geolocation.getCurrentPosition(function(position) {
            var userLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

            directionsService.route({
                origin: userLocation,
                destination: { lat: <?php echo $latitude; ?>, lng: <?php echo $longitude; ?> },
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsDisplay.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });

            marker.setPosition(userLocation);
            map.setCenter(userLocation);
        }, function() {
            window.alert('Error: The Geolocation service failed.');
        });

        directionsDisplay.setMap(map);
    }
    </script>
    
  </head>
  <body onload="initMap()">

  <?php
    $sql = "SELECT * FROM map WHERE id = 1";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $latitude = $row['lat'];
        $longitude = $row['lon'];
    } else {
        echo "Location not found.";
    }
  ?>

    <div id="map" style="width: 100%; height: 500px; border: 1px solid red;"></div>
    
  </body>
</html>
