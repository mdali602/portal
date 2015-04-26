<?php

  session_start();
  if(!$_SESSION['username'])
  {
    header("location: login.php");
  }
  
  $username=$_SESSION['username'];
  mysql_connect("localhost", "root", "ali");
  mysql_select_db("job_portal");
  
  $query="SELECT * FROM recruiters WHERE username='$username'";
  $run=mysql_query($query);
  $row=mysql_fetch_array($run);
  
  $compname=$row[1];
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
            <li><a href="welcome.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="view_jobs_rec.php"><span class="glyphicon glyphicon-search"></span> Jobs</a></li>
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
                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Edit Profile</a></li>
                <li><a href="view_profile_rec.php"><span class="glyphicon glyphicon-eye-open"></span> View Profile</a></li>
                <li><a href="postjob.php"><span class="glyphicon glyphicon-export"></span> Post a Job</a></li>
                <li><a href="jobposted.php"><span class="glyphicon glyphicon-import"></span> Job Posted</a></li>
                <li><a href="logout_rec.php"><span class="glyphicon glyphicon-off"></span> Sign out</a></li><!--
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
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <form action="postjob.php" method="POST" enctype="multipart/form-data">
	    <input type="file" name="file"></br></br>
	    <input type="submit" value="upload" name="upload">
	  </form>
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <form class="form-horizontal" role="form" action="postjob.php" method="POST">
          <div class="form-group">
            <label class="col-lg-3 control-label">Job Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="jobname" placeholder="Job Name" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Location:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="location" placeholder="Location" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">experience Required:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="exp" placeholder="experience required" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Salary Offered:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="salary" placeholder="Salary Offered" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Posted On:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="posted" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label">Application Deadline:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="closed" />
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Job Descrioption:</label>
            <div class="col-md-8">
              <textarea class="form-control" type="text" name="jobdesc" rows="5" cols="30">
              
              </textarea>
            </div>
          
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Skills Required:</label>
            <div class="col-md-8">
              <textarea class="form-control" type="text" name="skills" rows="5" cols="30">
              
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" name="postjob" value="Post Job" />
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
</html>

<?php

  mysql_connect("localhost", "root", "ali");
  mysql_select_db("job_portal");

    if(isset($_POST['postjob'])) {
  
    echo $jobname=$_POST['jobname'];
    echo $location=$_POST['location'];
    echo $exp=$_POST['exp'];
    echo $salary=$_POST['salary'];
    echo $jobdesc=$_POST['jobdesc'];
    echo $skills=$_POST['skills'];
    echo $posted=$_POST['posted'];
    echo $closed=$_POST['closed'];
    
    $query="Insert into job (jobname, location , experience, salary, jobdesc, skills, compname, posted, closed) values ('$jobname', '$location', '$exp', '$salary', '$jobdesc', '$skills', '$compname', '$posted', '$closed')";
    
    if(mysql_query($query)>0) {

      echo "<script> alert ('Job posted Successfully!') </script>";
//       echo "<script> window.open('welcome.php', '_self')</script>";
    } else {
      echo "<script> alert ('Required field Missing!') </script>";
    }
  } else {
    echo "<script> alert ('There is some Error.!') </script>";
  }

?>