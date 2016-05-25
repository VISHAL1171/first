<!doctype html>
<html lang="en">
<head>
<meta charset="utf8">
<meta name="viewport"content="width=device-width initial-scale=1">
<link rel="stylesheet" href="
http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <title>sanjeevani health care</title>
</head>
<body>
</body>
</html>
<?php
require "pconnect.php";
if(isset($_POST['NAME'])){
$sn=$_POST['NAME'];
$q="SELECT  `NAME`, `Image`, `AGE`, `MOB_NO.`, `ENAME` FROM `p_info` WHERE `NAME`='$sn'";
if($result=mysql_query($q)){
        while($row = mysql_fetch_assoc($result)) {
        /*echo '<img src="'.$row['Image'].'" width="400px",height="400px">';*/
        echo '<table class="table">
        <thead><tr><th>Name</th><th>image</th><th>age</th><th>mobile no.</th><th>emergency contact</th><th>to upload click here</th></tr>
        <tbody>
        <tr class="success"><td>'.$row['NAME'].'</td><td><img src="'.$row['Image'].'" width="400px",height="400px"></td><td>'.$row['AGE'].'</td><td> '.$row['MOB_NO.'].' </td><td>'.$row['ENAME'].'</td><td><a href="ul.php">LOGIN FIRST TO EDIT</a></td></tr>';
        /*echo'<img src="il_fullxfull.688653515_fq5b.jpg
">';*/
                }
    }
}
?>
