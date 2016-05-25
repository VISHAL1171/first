<?php
require 'pconnect.php';
if(isset($_POST['OP'])){
	$op=$_POST['OP'];
if(!empty($_POST['NP'])){
	$n=$_POST['NP'];
	echo $n;
    $q1="UPDATE `p_info` SET `PASSWORD`='$n' WHERE `PASSWORD`='$op'";
	 if(mysql_query($q1)){echo 'updated successfully';}}
if(!empty($_POST['NC'])){
	$nc=$_POST['NC'];
	echo $nc;
    $q2="UPDATE `p_info` SET `MOB_NO.`='$nc' WHERE  `PASSWORD`='$op'";
	if(mysql_query($q2)){echo 'updated successfully';}}
if(!empty($_POST['EC'])){
	$ec=$_POST['EC'];
	echo $ec;
    $q3="UPDATE `p_info` SET `ENAME`='$ec' WHERE `PASSWORD`='$op'";
	if(mysql_query($q3)){echo 'updated successfully';}}
if(!empty($_POST['fileT'])){
	$f=$_POST['fileT'];
	echo $f;
    $q4="UPDATE `p_info` SET `file`='$f' WHERE `PASSWORD`='$op'";
	if(mysql_query($q4)){echo 'updated successfully';}}
}
?>
