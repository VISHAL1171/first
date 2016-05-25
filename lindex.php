<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sanjeevani HealthCare</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  body {
 background: url('care.jpg') no-repeat center center fixed;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}</style>
<body>
 <?php
require 'connect.php';
require 'core.inc.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
    echo '<br/><h2 style="backgorund-color:yellow"><bold>Congrat\'s</bold>you are relogged in.</h2>';
    echo'<button type="button" class="btn btn-success btn-lg btn-block" ><a href="search.php">search for patient</a></button>';
    echo'<button type="button" class="btn btn-info btn-lg btn-block"><a href="getfile.php">to get patient file click here</a></button>';
    echo'<button type="button" class="btn btn-danger btn-lg btn-block"><a href="logout.php">log out</a></button>';
}
else{include 'login.php';}
?>
</body>
</html>
