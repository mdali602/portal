<?php
    
    mysql_connect("localhost", "root", "ali");
    mysql_select_db("job_portal");

    session_start();
    if($_SESSION['username']) {
      // header("location: view_jobs.php");
       $username=$_SESSION['username'];
       $query="SELECT * FROM recruiters WHERE username='$username'";
       $run=mysql_query("$query");
       if(mysql_num_rows($run) > 0) {
           // echo "<script> alert('You are already logged in as recruiter....First logout from Recruiter\'s Panel!')</script>";
           // echo "<script> alert('Already logged in as recruiter....Logout from there!)</script>";
           // header("location: view_profile_rec.php");
           // echo "<script> window.open('view_profile_rec.php', '_self')</script>";
           session_destroy();
           header("location: login.php");
           exit();
       }
       // header("location: view_jobs.php");
    }
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
            <!-- <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a></li> -->
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

      <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a></li>
            
	    <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                <span class="glyphicon glyphicon-user"></span> <?php echo $username; ?> <span class="caret"></span>
              </a>
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
    <table class="table table-striped table-responsive table-bordered">
	    
	  <tr class="info">
  		<th>S.No.</th>
      <th>Job</th>
  		<th>Company Name</th>
      <th>Location</th>
  		<th>Sallary</th>
  		<th>status</th>
      <th>Closed on</th>
	  </tr>

		<?php
		    mysql_connect("localhost", "root", "ali");
		    mysql_select_db("job_portal");
        $count=0;
        $status="Applied";
		    // $query="SELECT * FROM jobnseeker WHERE seekername='$username'";
		    $query=mysql_query("select a.seekername, a.j_id, b.job_id, b.jobname, b.compname, b.location, b.salary, b.closed
                            from jobnseeker a, job b
                            where a.j_id = b.job_id AND a.seekername='$username'"
                          );
        while($row=mysql_fetch_array($query)) {
		      
    			$count=$count+1;
          $jobname=$row[3];
          $compname=$row[4];
    			$location=$row[5];
    			$salary=$row[6];
    			$closed=$row[7];
    		?>
  		<tr>	
  			<td><?php echo $count; ?></td>
        <td><?php echo $jobname; ?></td>
  			<td><?php echo $compname; ?></td>
        <td><?php echo $location; ?></td>
  			<td><?php echo $salary; ?></td>
  			<td><?php echo $status; ?></td>
  			<td><?php echo $closed; ?></td>
  		</tr>

  	<?php } ?> 
	 </table><!-- </table> -->
	</div>    
</div>	<!-- End Container -->

  <script type="text/javascript" src="bootstrap/js/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>