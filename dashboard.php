<?php

  session_start();
  if(!$_SESSION['username'])
  {
    header("location: login.php");
  }
  
  $username=$_SESSION['username'];
//   mysql_connect("localhost", "root", "ali");
//   mysql_select_db("job_portal");
//   
//   $query="SELECT * FROM jobnseeker WHERE seekername='$username'";
//   $run=mysql_query($query);
//   $row=mysql_fetch_array($run);
//   
//   $name=$row[1];
//   $username=$row[2];
//   $password=$row[3];
//   $email=$row[4];
//   $phone=$row[5];
// //   $location='uploads/';
//   $query="SELECT * FROM users_info WHERE username='$username'";
//   $run=mysql_query($query);
//   $row=mysql_fetch_array($run);
//   $location=$row[2];
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

<div class="container">
    <div class="col-md-11" style="margin-left: 4%; margin-top: 12%;">
	<table class="table table-striped">
	    
	    <tr>
		<th>S.No.</th>
		<th>Company Name</th>
		<th>Job</th>
		<th>Sallary</th>
		<th>Location</th>
		<th>status</th>
<!-- 		<th>Posted On</th> -->
		<th>Closed on</th>
	    </tr>
	    
	    <tr>
		<?php
		    mysql_connect("localhost", "root", "ali");
		    mysql_select_db("job_portal");

		    $query="SELECT * FROM jobnseeker WHERE seekername='$username'";
		    $run=mysql_query($query);
		    $row=mysql_fetch_array($run);
// 		    $name=$row[1];
		    $jobname=$row[2];
// 		    $compname=$row[3];
		    
		    $query="SELECT * FROM job WHERE job_id='$j_id'";
// 		    $run=mysql_query($query);
// 		    $row=mysql_fetch_array($run);
		    $s_no=0;
		    $status="Applied";
		    while($row=mysql_fetch_array($run)) {
		
			$s_no=$s_no+1;
			$jobname=$row[1];
			$location=$row[2];
// 			$exp=$row[3];
			$salary=$row[4];
// 			$jobdesc=$row[5];
// 			$skills=$row[6];
			$compname=$row[7];
// 			$posted=$row[8];
			$closed=$row[9];
		?>
			
			<td><?php echo $s_no; ?></td>
			<td><?php echo $compname; ?></td>
			<td><?php echo $jobname; ?></td>
			<td><?php echo $salary; ?></td>
			<td><?php echo $location; ?></td>
			<td><?php echo $status; ?></td>
			<td><?php echo $closed; ?></td>
		    </tr>

		 <?php } ?> 
	    </table><!-- </table> -->

	</div>
    
    </div>	<!-- End Container -->

</body>
</html>