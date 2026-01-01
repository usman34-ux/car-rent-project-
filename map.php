<?php
  if(
    !isset($_GET['lat']) || !isset($_GET['lng'])
    || empty($_GET['lat']) || empty($_GET['lng'])
    // || !is_double($_GET['lat']) || !is_double($_GET['lng'])
  ) {
    header("location: index.php");die;
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Map Location</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
      body{
        margin: 0;
      }
      #map {
        height: 100vh;
        width: 100%;
      }
    </style>
    <script>
      function initMap() {
        const uluru = { lat: <?=$_GET['lat']?>, lng: <?=$_GET['lng']?> };
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 15,
          center: uluru,
        });
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
      }
    </script>
  </head>
  <body>
    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=&callback=initMap&libraries=&v=weekly" async></script>
  </body>
</html>