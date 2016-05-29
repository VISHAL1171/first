<?php
require "pconnect.php";
if(isset($_POST['pname'])){
	$pn=$_POST['pname'];
	echo $pn;
}
if(isset($_POST['id'])){
		$id=$_POST['id'];
         echo $id ;
         echo 'ss';
         echo 'ussr';
         echo 'acd';
         echo 'hhh';
         echo 'jkl';
}
$q="SELECT `AGE`, `MOB_NO.`, `EMAIL`, `Image`,`ENAME`, `ENO`, `RELATION`, `ALERGIC`, `PRESCRIPTION`, `SEX`, `BG`, `PASSWORD`, `BILL`, `file`, `id`
 FROM `p_info` WHERE `NAME`='$pn' AND `id`='$id'";
if( $result=mysql_query($q)){echo 'yesss';
       $row = mysql_fetch_assoc($result);
	   echo '<table class="table">
	   <tbody><thead>
	   <th>MOBNO</th><th>Image</th><th>Email</th><th>MOBNO</th><th>EMERGENCY CONTACT NAME</th><th>file</th><th>PRESCRIPTIN</th><th>sex</th></thead>

	   <tr class="success"><td>'.$row['MOB_NO.'].'</td><td><img src="'.$row['Image'].'" width="400px",height="400px"></td><td>'.$row['EMAIL'].'</td><td> '.$row['MOB_NO.'].' </td><td>'.$row['ENAME'].'</td>
	   <td><img src="'.$row['file'].'" width="400px",height="400px"></td><td>'.$row['PRESCRIPTION'].'</td><td>'.$row['SEX'].'</td></tr></tbody>';
}
else{echo'wwww';}
?>
