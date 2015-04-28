<?php

    session_start();
    if(!$username=$_SESSION['username'])
    {
      header("location: login_rec.php");
    }

?>
<!DOCTYPE html>
<html>
<head>

  <title></title>
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
            <li><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="postjob.php"><span class="glyphicon glyphicon-export"></span> Post a Job</a></li>
                
            <!-- <li class="active"><a href="view_jobs_rec.php"><span class="glyphicon glyphicon-search"></span> Jobs</a></li> -->
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
    <li><a href="jobposted.php"><span class="glyphicon glyphicon-dashboard"></span> DASHBOARD</a></li>

      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> My Account <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-pencil"></span> Edit Profile</a></li>
                <li><a href="view_profile_rec.php"><span class="glyphicon glyphicon-eye-open"></span> View Profile</a></li>
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

  <div class="container">
    <div class="col-md-8" style="margin-left: 15%; margin-top: 10%;">

    <table class="table table-striped table-responsive table-bordered">
      <thead>
      <tr class="info">
          <th> S.No </th>
          <th> Username </th>
          <th> Resume </th>
      </tr>
      </thead>
      <tbody>

      <?php
        mysql_connect("localhost", "root", "ali");
        mysql_select_db("job_portal");
        if(isset($_GET['job_id']))
        {

          $count=0;
          $job_id=$_GET['job_id'];
          $query=mysql_query("select a.seekername, b.username, b.resname, b.resname
                              from jobnseeker a, users_info b
                              where a.j_id = $job_id and a.seekername = b.username;"
                            );
            while($row=mysql_fetch_array($query)) {
              $count = $count + 1;
              $seekername=$row[0];
              $resume=$row[2];
              $location=$row[3];
              $path="uploads/".$seekername."/".$location;
              
          ?>
            <tr>
              <td><a href="#"><?php echo $count; ?></a></td>
              <td><a href="view_users.php?applicant=<?php echo $seekername; ?>"><?php echo $seekername; ?></a></td>
              <td>
                <!-- <a href="#"><?php echo $resume; ?></a> -->
                <!-- <div class="btn btn-link" /> -->
                  <a target = '_blank' href="<?php echo $path; ?>"><?php echo $resume; ?></a>
                <!-- </<div></div>> -->
                <!-- <span class="glyphicon glyphicon-download" style="margin-left: -2%; margin-top: 1%;"></span> -->
              </td>
            </tr>
          <?php
          }
        } 
      ?>  
      </tbody>
      </table>

    </div>
  </div>


    <!-- // <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
    <script src="bootstrap/js/jquery-1.10.2.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>