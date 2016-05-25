<?php
$servername = "localhost";
$username = "root";
$password = "";
//$mysql_db='patient';

// Create connection
$conn = mysqli_connect($servername, $username, $password);
//$c=mysqli_select_db($conn,$mysql_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
