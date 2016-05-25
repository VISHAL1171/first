<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sanjeevani HealthCare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container-fluid">
     <form method="POST" action="mstore.php">
     <div class="form-group">
     <label for="mname">name of medicine:</label>
     <input type="text" class="form-control"  name="mname" id="mname" placeholder="enter-name"></div>
     <div class="form-group">
     <label for="nunit">no.of unit:</label>
     <input type="number" class="form-control" name="nunit" id="nunit" placeholder="enter no.of unit of medicines"></div>
     <input type="submit"  value="submit">
</div>
</body>
</html>
<?php
?>
