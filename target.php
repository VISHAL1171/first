<?php
if(isset($_POST['uname'])&&isset($_POST['pword'])){
  $uname=$_POST['uname'];
  $pword=$_POST['pword'];
  if(!empty($uname)&&!empty($pword)){
    $query="SELECT `PASSWORD` FROM `user` WHERE `NAME`='$uname' AND `PWORD`='$pword'";
   if($query_run=mysql_query($query)){
     echo'aaa';
     $query_num_rows=mysql_num_rows($query_run);
     if($query_num_rows==0){echo 'Invalid username/password combination.';}
      else if($query_num_rows==1){echo 'OK';
      echo $user_id=mysql_result($query_run,0,'id');
        $_SESSION['user_id']=$user_id;
         header('Location:lindex.php');
  }
}
 else { echo 'you must supply a username and password';}
}
 }
?>
