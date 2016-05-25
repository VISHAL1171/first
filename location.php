<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
      #map-container { height: 600px }
    </style>
  <h1>Sanjeevni Loacation</h1>
</head>
<body>
<div class="container-fluid">
<div id="map-container" class="col-md-12"></div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script>

    function init_map() {
      var var_location = new google.maps.LatLng(12.8446416,80.1588738);

      var var_mapoptions = {
        center: var_location,
        zoom: 14
      };

      var var_marker = new google.maps.Marker({
          position: var_location,
          map: var_map,
          title:"Sanjeevani"});

      var var_map = new google.maps.Map(document.getElementById("map-container"),
          var_mapoptions);

      var_marker.setMap(var_map);

    }

    google.maps.event.addDomListener(window, 'load', init_map);

  </script>
 </div>
 </div>
 </body>
 </html>
