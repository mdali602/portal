<?php

    session_start();
    if(!$username=$_SESSION['username'])
    {
      header("location: login.php");
    }
    
    mysql_connect("localhost", "root", "ali");
    mysql_select_db("job_portal");
    if(isset($_GET['job_id']))
    {

      $job_id=$_GET['job_id'];
      
      $check_user="SELECT * FROM jobnseeker WHERE j_id='$job_id'";
      
      $run=mysql_query($check_user);
      
      while(mysql_num_rows($run) > 0) {

	echo "<script> alert('You have already applied for this job!'); </script>";
	echo "<script> window.open('view_jobs.php', '_self'); </script>";
	exit();
      }
      $query="INSERT INTO jobnseeker (seekername, j_id) values ('$username', '$job_id')";
      
      if(mysql_query($query)>0) {
	echo "<script> alert('Your response is registered!'); </script>";
	echo "<script> window.open('view_jobs.php', '_self'); </script>";
      }
    }
?>