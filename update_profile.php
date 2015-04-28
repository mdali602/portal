<?php

  session_start();
  if(!$_SESSION['username'])
  {
    header("location: login.php");
  }
  $username=$_SESSION['username'];
  mysql_connect("localhost", "root", "ali");
  mysql_select_db("job_portal");
  
  $query="SELECT * FROM users WHERE username='$username'";
  $run=mysql_query($query);
  $row=mysql_fetch_array($run);
  
  $name=$row[1];
  $username=$row[2];
  $password=$row[3];
  $email=$row[4];
  $phone=$row[5];
  
  $query="SELECT * FROM users_info WHERE username='$username'";
  $run=mysql_query($query);
  $row=mysql_fetch_array($run);
  $location=$row[2];
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Login Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="bootstrap/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <!-- <li><a href="welcome.php"><span class="glyphicon glyphicon-home"></span></a></li> -->
            <li><a href="view_jobs.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <!-- <li><a href="view_jobs.php"><span class="glyphicon glyphicon-search"></span> Jobs</a></li> -->
            <!-- <li><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a></li> -->
            <!-- <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li> -->
          </ul>
	  
	  <ul class="nav navbar-nav pull-right">
      <li><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a></li>
	    <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> My Account <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                <li><a href="update_profile.php"><span class="glyphicon glyphicon-pencil"></span> Edit Profile</a></li>
                <li><a href="view_profile.php"><span class="glyphicon glyphicon-eye-open"></span> View Profile</a></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span> Sign out</a></li><!--
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>-->
              </ul>
            </li>
	  </ul>
	  
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<div class="container" style="margin-top: 100px;">
<!--     <h1>Edit Profile</h1> -->
  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
<!--           <img src="//placehold.it/100" class="avatar img-circle" alt="avatar"> -->
          
          <?php echo "<img src='$location' class='avatar img-circle' alt='avatar' style='width:150px; height=180px; margin-left: 30%;' />";?>
          
          <h6 style="margin-left: 30%;">Upload a different photo...</h6>
                    
          <form action="update_profile.php" method="POST" enctype="multipart/form-data">
	    <div class="btn btn-primary" id="picup1" style="width: 44%; margin-left: 3%">Select File</div>
	    <input type="file" class="hidden" id="picup2" style="width: 44%; margin-left: 30%;" name="file">
<!-- 	    <div> -->
<!-- 	      <span class="glyphicon glyphicon-upload"></span> -->
	      <input type="submit" class="btn btn-success" style="margin-top: -23%; margin-left: 76%;" value="upload" name="upload_pic">
<!-- 	    </div> -->
	  </form>
        </div>
        
        <div class="text-center">
<!--           <img src="//placehold.it/100" class="avatar img-circle" alt="avatar"> -->
          <!--
          <?php echo "<img src='$location' class='avatar img-circle' alt='avatar' style='width:150px; height=180px;' />";?>
          
          <h6>Upload a different photo...</h6>
                    -->
          <form action="update_profile.php" method="POST" enctype="multipart/form-data">
<!-- 	    <div class="btn btn-primary" style="width: 44%;"> -->
	      <label class="col-md-3 control-label">Upload Resume:</label>
	      <div class="btn btn-primary" id="resup1" style="width: 44%; margin-left: -22%;">Select File</div>
	      <input type="file" class="hidden" id="resup2" style="width: 44%; margin-left: 30%;" name="file">
<!-- 	    </div> -->
<!-- 	    <div> -->
<!-- 	      <span class="glyphicon glyphicon-upload"></span> -->
	   
	      <input type="submit" class="btn btn-success" style="margin-top: -29%; margin-left: 76%;" value="upload" name="upload_resume">
<!-- 	    </div> -->
	  </form>
        </div>
        
      </div> <!-- End col-md-3 -->
      
      <!-- edit form column -->
      <div class="col-md-8 personal-info">
        
        <form class="form-horizontal" role="form" action="update_profile.php" method="POST">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="name" value="<?php echo $name ?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="email" value="<?php echo $email ?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone No:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="phone" value="<?php echo $phone ?>" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="password" value="<?php echo $password ?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="confirm_password" value="<?php echo $password ?>" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="save" value="Save Changes" />
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
          
        </form>
      </div>
  </div>
</div>
<hr>
<script>
  $(document).ready(function(){
    $("#picup1").click (function()
    {
      $('#picup2').click();
    });
  });
  
  $(document).ready(function(){
    $("#resup1").click (function()
    {
      $('#resup2').click();
    });
  });
  
</script>
<!--<script>
  $('#picup').click (function(){
    $('#file').click();
  })
</script>-->
</body>
</html>

<?php
  
  $username=$_SESSION['username'];
  mysql_connect("localhost", "root", "ali");
  mysql_select_db("job_portal");
  
  $check="SELECT * FROM users_info where username='$username'";
    
    $run=mysql_query($check);
    
    if(!mysql_num_rows($run)) {
//       $query="Insert into users_info (username) values ('$username')";
      mysql_query("INSERT INTO users_info (username) values ('$username')") or die ("username Insertion failed!") ;
    }
    
  
  if (isset($_POST['upload_pic']))
  {   
 
    echo "</br>";
    echo $username=$_SESSION['username'];echo "</br>";    
    echo $name=$_FILES['file']['name'];echo "</br>";
    echo $size=$_FILES['file']['size'];echo "</br>";
    echo $type=$_FILES['file']['type'];echo "</br>";
    echo $tmp_name=$_FILES['file']['tmp_name'];echo "</br>";
    
    if (!empty($name))
    {   

      $location='uploads/'.$username.'/';

      if (!file_exists($location)) {
	  mkdir($location, 0777);
	  chmod($location, 0777);
      }
      
      echo $location;echo "</br>";
      
      if (move_uploaded_file($tmp_name, $location.$name))
      {
      	echo 'File Uploaded!';
      	$run=mysql_query("UPDATE users_info SET profile_pic='$location$name' WHERE username='$username'")/* or die ("update could not be applied")*/;
      	/*if(!mysql_num_rows($run))
      	{
	  $err=mysql_error($run);
	  echo "<script>alert(' $err')</script>";
      	}*/

      	echo "<script> window.open('update_profile.php', '_self')</script>";
      }  
      else
      {
      	echo 'There is an error!';
	echo $error=$_FILES['file']['error'];
      }
    }
    else
    {
      echo 'Please! choose a file.';
    }
  }
  if (isset($_POST['upload_resume']))
  {
    echo "</br>";
    echo $username=$_SESSION['username'];echo "</br>";   
    echo $name=$_FILES['file']['name'];echo "</br>";
    echo $size=$_FILES['file']['size'];echo "</br>";
    echo $type=$_FILES['file']['type'];echo "</br>";
    echo $tmp_name=$_FILES['file']['tmp_name'];echo "</br>";
    
    if (!empty($name))
    {   
      $location='uploads/'.$username.'/';

      if (!file_exists($location)) {
	  mkdir($location, 0777);
	  chmod($location, 0777);
      }
      
      echo $location;echo "</br>";
      
      if (move_uploaded_file($tmp_name, $location.$name))
      {
      	echo 'File Uploaded!';
      	mysql_query("UPDATE users_info SET resume='$location$name', resname='$name' WHERE username='$username'") or die ("update could not be applied");
      	echo "<script>alert('Your Resume has been uploaded!'); </script>";
        echo "<script> window.open('update_profile.php', '_self'); </script>";
      }  
      else
      {
      	echo 'There is an error!';
	echo $error=$_FILES['file']['error'];
      }
    }
    else
    {
      echo 'Please! choose a file.';
    }
  }
  if(isset($_POST['save']))
  {
    $name1=$_POST['name'];
    //$username=$_POST['username'];
    $password1=$_POST['password'];
    $confirm_password1=$_POST['confirm_password'];
    $email1=$_POST['email'];
    $phone1=$_POST['phone'];

    if($password1!=$confirm_password1) {
      echo "<script> alert('Please.. fill all the details correctly!') </script>";
      exit();
    }
    
    $check="SELECT * FROM users WHERE username='$username'";
    
    $run=mysql_query($check);
    
    if(mysql_num_rows($run) > 0) {
//       $query="UPDATE users SET name='$name1', password='$password1', email='$email1', phone='$phone1' WHERE username='$username'";
      mysql_query("UPDATE users SET name='$name1', password='$password1', email='$email1', phone='$phone1' WHERE username='$username'") or die ("update could not be applied");
//       echo "<script> alert('Profile updated!') </script>";
      echo "<script> window.open('update_profile.php', '_self')</script>";
      //exit();
    }    
  }
?>