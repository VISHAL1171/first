<!doctype html>
<html lang="en">
<head>
<meta charset="utf8">
<meta name="viewport"content="width=device-width initial-scale=1">
<link rel="stylesheet" href="
http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>body {
 background: url('Indra.jpg') no-repeat center center fixed;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
 }</style>
 <title>sanjeevani health care</title>
</head>
<body>
<?php
require 'pconnect.php';
require 'pcore.inc.php';
if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
    echo '<br/><h2 style="backgorund-color:yellow"><bold>Congrat\'s</bold>you are relogged in.</h2>';
    echo'<button type="button" class="btn btn-success btn-lg btn-block" ><a href="aform.php"> To fix appointment click here</a></button>';
    echo'<button type="button" class="btn btn-info btn-lg btn-block"><a href="medi.php">To buy medicines click here</a><br/></button>';
    echo'<button type="button" class="btn btn-warning btn-lg btn-block"><a href="edit.php">To edit your profile</a><br/></button>';
    echo'<button type="button" class="btn btn-danger btn-lg btn-block"><a href="plogout.php">log out</a><br/></button>';
}else{include 'plogin.php';}
?>
</body>
</html>
