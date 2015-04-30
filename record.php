<?php

    session_start();
    if(!$username=$_SESSION['username'])
    {
      header("location: login.php");
    }
    
    mysql_connect("localhost", "root", "ali");
    mysql_select_db("job_portal");

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

    if(isset($_GET['job_id']))
    {

      $job_id=$_GET['job_id'];
      
      $check_user="SELECT * FROM jobnseeker WHERE seekername='$username' AND j_id='$job_id'";
      
      $run=mysql_query($check_user);
      
      if(mysql_num_rows($run) > 0) {

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