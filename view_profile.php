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
//   $location='uploads/';
  $query="SELECT * FROM users_info WHERE username='$username'";
  $run=mysql_query($query);
  $row=mysql_fetch_array($run);
  $location=$row[2];
  $path=$row[3];
  $resname=$row[4];
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Login Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<!--     <link rel="stylesheet" type="text/css" href="form/style.css" /> -->
    
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
            <li><a href="welcome.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="view_jobs.php"><span class="glyphicon glyphicon-search"></span> Jobs</a></li>
            <li class="dropdown">
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
            </li>
          </ul>
	  
	  <ul class="nav navbar-nav pull-right">
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
	
    <b style="margin-left: 14%;">WELCOME</b>
    <font color="red" size="5">
      <?php
	  echo $_SESSION['username'];
	  
    //       echo $_SESSION['name'];
      ?>
    </font>

  	<hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center" style="margin-right: 80%">
<!--           <img src="uploads/$username" class="avatar img-circle" alt="avatar" style="width:150px; height=180px;"> -->
          <div class="avatar img-circle" alt="avatar">
	    <?php echo "<img src='$location' class='avatar img-circle' alt='avatar' style='width:150px; height=180px; margin-left: 300%' />";?>
          </div>
          <!--<h6>Upload a different photo...</h6>
          <form action="view_profile.php" method="POST" enctype="multipart/form-data">
	    <input type="file" name="file"></br></br>
	    <input type="submit" value="upload" name="upload">
	  </form>-->
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
<!--         <h3>Personal info</h3> -->
        
        <form class="form-horizontal" role="form" action="view_users.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8" style="margin-top: 7px;">
<!--               <input class="form-control" type="text" value="" /> -->
		    <?php echo $name; ?>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8" style="margin-top: 7px;">
<!--               <input class="form-control" type="text" value="" /> -->
		  <?php echo $username; ?>
            </div>
          </div><!--
          <div class="form-group">
            <label class="col-lg-3 control-label">Company:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="">
            </div>
          </div>-->
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8" style="margin-top: 7px;">
<!--               <input class="form-control" type="text" value="" /> -->
		  <?php echo $email; ?>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone No:</label>
            <div class="col-lg-8" style="margin-top: 7px;">
<!--               <input class="form-control" type="text" value=""> -->
		  <?php echo $phone; ?>
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Resume:</label>
            <div class="col-lg-8">
<!--               <input class="form-control" type="text" value=""> -->
		  <?php echo $resname; ?>
		  <div class="btn btn-link" /><a target = '_blank' href="<?php echo $path; ?>">Download</a></div>
		  <span class="glyphicon glyphicon-download" style="margin-left: -2%; margin-top: 1%;"></span>
            </div>
          </div>
          
        </form>
        
      </div>
  </div>
</div>
<hr>
</body>
</html>