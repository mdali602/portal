<?php

  session_start();
  if(!$_SESSION['username'])
  {
    header("location: login_rec.php");
  }
  $username=$_SESSION['username'];
  mysql_connect("localhost", "root", "ali");
  mysql_select_db("job_portal");
  
  $query="SELECT * FROM recruiters WHERE username='$username'";
  $run=mysql_query($query);
  $row=mysql_fetch_array($run);
  $compname=$row[1];

?>

<html>

<head>
	<meta charset="utf-8" />
	<title>view jobs</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
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
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="active"><a href="view_jobs_rec.php"><span class="glyphicon glyphicon-search"></span> Jobs</a></li>
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
	    <li class="dropdown">
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
<!-- 	<table width='800' align='center' border='5'> -->
<div class="container">
	<div class="col-md-11" style="margin-left: 10%; margin-top: 3%;">

		<?php
			mysql_connect("localhost", "root", "ali");
			mysql_select_db("job_portal");

			$query="SELECT * FROM job WHERE compname='$compname'";
// 			$query1="SELECT * FROM recruiters";

			$run=mysql_query($query);
// 			$run1=mysql_query($query1);

			while($row=mysql_fetch_array($run)) {
				
				$job_id=$row[0];
				$jobname=$row[1];
				$location=$row[2];
				$exp=$row[3];
				$salary=$row[4];
				$jobdesc=$row[5];
				$skills=$row[6];
				$compname=$row[7];
				$posted=$row[8];
				$closed=$row[9];
		?>
		<div style="border: 1px">
			<div class="col-lg-9" style="margin-top: 7px;">
			      <h3><?php echo $jobname; ?></h3>
			      
      			      <div type="submit" class="btn btn-link" id="Applicants" style="width: 12%; margin-left: 80%; margin-top: -4%"> <a href="applicants1.php?job_id=<?php echo $job_id; ?>"> Applicants </a></div>

			      <a href="#"><h4><?php echo $compname; ?></h4></a>
			      <div><b>Location: </b><?php echo $location; ?></div>
			      <div style="margin-left: 30%; margin-top: -3%"><b>Experience: </b><?php echo $exp; ?></div>
			      <div style="margin-left: 60%; margin-top: -3%"><b>Salary: </b><?php echo $salary; ?></div>
			      
			      <div style="margin-left: 0%; margin-top: 1%"><b>Posted On: </b><?php echo $posted; ?></div>
			      <div style="margin-left: 30%; margin-top: -3%"><b>Application Deadline: </b><?php echo $closed; ?></div>
			</div>
			<div class="col-lg-9" style="margin-top: 1%;">
			      <b>Job Description: </b><?php echo $jobdesc; ?>
			</div>
			
			<div class="col-lg-9" style="margin-top: 1%;">
			      <b>Skills Required: </b><?php echo $skills; ?>
			</div>
		</div>

		<?php }	?>
	</div>
    <!-- 	</table> -->
    </div>	<!-- End Container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>