<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 </html>
<?php
$BD=array("02-05-2016","03-05-2016","04-05-2016","05-05-2016","06-05-2016","07-05-2016","08-05-2016","09-05-2016","10-05-2016");
$BT=array("11:00","10:00","12:00","13:00","09:00","04:00","02:00",);
if(isset($_POST['time'])&&isset($_POST['date'])){
    echo 'yes';
	$st=$_POST['time'];
    echo $st;
    $sd=$_POST['date'];
    $n=$_POST['nm'];
    $mn=$_POST['mobno'];
    $age=$_POST['age'];
}
foreach ($BD as $d) {
	if($d!="$sd"){$a=1;}
    else $a=0;
}
foreach ($BT as $t) {
	if($t!="$st"){$b=1;}
    else $b=0;
}
if(($a==1)&&($b==1)){
    echo' <table class="table">
     <thead><tr><th>NAME</th><th>AGE</th><th >MOB NO</th><th>date</th><th>time</th></tr>
     <tbody>
     <tr class="success"><td>'.$n.'</td><td>'.$age.'</td><td>'.$mn.'</td><td>'.$st.'</td><td>'.$sd.'</td></tr>
     </tbody>
     </table>';
}
else{
    echo' <table class="table">
     <thead><tr><th>NAME</th><th>AGE</th><th >MOB NO</th><th>date</th><th>time</th></tr>
     <tbody>
     <tr class="success"><td>'.$nm.'</td><td>'.$age.'</td><td>'.$mn.'</td><td>select another time slot</td><td>select another date</td></tr>
     </tbody>
     </table>';
}
?>
