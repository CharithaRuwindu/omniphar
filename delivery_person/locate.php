<?php
require_once('dbconn.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Add Location</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDv492o7hlT-nKoy2WGWmnceYZLSw2UDWw"></script>
    <script>
      var map;
      var marker;

      function initMap() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var center = {lat: position.coords.latitude, lng: position.coords.longitude};
            map = new google.maps.Map(document.getElementById('map'), {
              zoom: 8,
              center: center
            });

            marker = new google.maps.Marker({
              map: map,
              position: center,
              draggable: true
            });

            setInterval(function() {
        navigator.geolocation.getCurrentPosition(function(position) {
          var newLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
          marker.setPosition(newLatLng);
          $('#latitude').val(marker.getPosition().lat());
          $('#longitude').val(marker.getPosition().lng());
        });
      }, 10000); // Update every 10 seconds

            google.maps.event.addListener(marker, 'dragend', function() {
              var position = marker.getPosition();
              $('#latitude').val(position.lat());
              $('#longitude').val(position.lng());
            });
          });
        } else {
          alert('Geolocation not supported.');
        }
      }
      

      $(document).ready(function() {
        // $('#submit').click(function() {
          var latitude = $('#latitude').val();
          var longitude = $('#longitude').val();

          $.ajax({
            url: 'pro_locate.php',
            type: 'post',
            data: {
              latitude: latitude,
              longitude: longitude,
            },
            success: function(response) {
              alert(response);
            },
            error: function(xhr, status, error) {
              alert(xhr.responseText);
            }
          });
        });
      // });
    </script>
    <style>
      #map {
        height: 500px;
        width: 100%;
      }
    </style>
  </head>
  <body onload="initMap()">
    <div id="map"></div>
    <form action="" method="post">
      <input type="text" name="lat" id="latitude" hidden>
      <input type="text" name="lon" id="longitude" hidden>
      <button type="button" id="submit" name="submit">Add Location</button>
    </form>
  </body>
</html>
