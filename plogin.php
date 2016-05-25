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
 background: url('Indra.jpg') no-repeat center center fixed;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 background-size: cover;
}

.panel-default {
 opacity: 0.9;
 margin-top:30px;
}
.form-group.last {
 margin-bottom:0px;
}
  </style>
 </head>
 <body>
 <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Login</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php echo $current_file;?>" method="post">
                        <div class="form-group">
                            <label for="uname" class="col-sm-3 control-label">USERNAME</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="uname" name="uname" placeholder="uname" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pword" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="pword" name="pword" placeholder="pword" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <p>new users <a href="pform.php">click here !</a></p>
                                </div>
                            </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<?php
if(isset($_POST['uname'])&&isset($_POST['pword'])){
    echo 'ss';
  $uname=$_POST['uname'];
  $pword=$_POST['pword'];
  if(!empty($uname)&&!empty($pword)){
    $query="SELECT `PASSWORD` FROM `p_info` WHERE `NAME`='$uname' AND `PASSWORD`='$pword'";
    if($query_run=mysql_query($query)){
     $query_num_rows=mysql_num_rows($query_run);
     if($query_num_rows==0){echo 'Invalid username/password combination.';}
      else if($query_num_rows==1){echo 'OK';
      echo $user_id=mysql_result($query_run,0,'PASSWORD');
        $_SESSION['user_id']=$user_id;
         header('Location:pindex.php');
  }
}
 else { echo 'you must supply a username and password';}
}
 }
?>
