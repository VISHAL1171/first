<?php
require "connection.php";
if(isset($_POST['NAME'])){
	$n=$_POST['NAME'];
	//echo $n;
}
if(isset($_POST['fileToUpload'])){
		$ftu=$_POST['fileToUpload'];
         echo $ftu;
}
if(isset($_POST['age'])){
	$a=$_POST['age'];
	//echo $a;
}
if(isset($_POST['ID'])){
	$id=$_POST['ID'];
	//echo $a;
}
if(isset($_POST['rtp'])){
	$x=$_POST['rtp'];
	//echo $x;
}
if(isset($_POST['mobno'])){
	$mn=$_POST['mobno'];
	//echo $mn;
}
if(isset($_POST['ename'])){
	$en=$_POST['ename'];
	//echo $en;
}
if(isset($_POST['eno'])){
	$enum=$_POST['eno'];
	//echo $enum;
}
if(isset($_POST['email'])){
	$email=$_POST['email'];
	//echo $email;
}
if(isset($_POST['agegroup'])){
	$ag=$_POST['agegroup'];
	//echo $ag;
}
if(isset($_POST['medications1'])){
	$m=$_POST['medications1'];
	//echo $m;
}
if(isset($_POST['medications2'])){
	$m=$_POST['medications2'];
	//echo $m;
}if(isset($_POST['allergy1'])){
	$al=$_POST['allergy2'];
	//echo $a;
}if(isset($_POST['allergy2'])){
	$al=$_POST['allergy2'];
	//echo $a;
}
if(isset($_POST['bg'])){
	$bg=$_POST['bg'];
	//echo $bg;
}
if(isset($_POST['addr'])){
	$ad=$_POST['addr'];
	//echo $ad;
}
if(isset($_POST['sex'])){
	$s=$_POST['sex'];
	//echo $s;
}
$dbname='patient';
$con = mysqli_connect($servername, $username, $password, $dbname);
//$c=mysqli_select_db($conn,$mysql_db);
//$q1="INSERT INTO `demo`(`nm`, `ag`) VALUES ('$n','$a')";
$p=rand(1000,9999);
$query1="INSERT INTO `p_info`(`NAME`,`Image`, `AGE`, `MOB_NO.`, `EMAIL`, `ENAME`, `ENO`, `RELATION`, `ALERGIC`, `PRESCRIPTION`, `SEX`, `BG`, `PASSWORD`,`id`)
VALUES ('$n','$ftu','$a','$mn','$email','$en','$enum','$x','$al','$m','$s','$bg','$p',$id)";
if($query_run=mysqli_query($con,$query1)){ echo'your password is '.$p;}
else{
	echo 'wrong query';
}
echo'<a href="pindex.php">click here to login and change</a>';
?>
