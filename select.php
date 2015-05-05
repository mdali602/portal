<?php

    session_start();
    if(!$username=$_SESSION['username'])
    {
      header("location: login.php");
    }
    
    mysql_connect("localhost", "root", "ali");
    mysql_select_db("job_portal");

    if($_SESSION['username']) {
 
      $username=$_SESSION['username'];
      $query="SELECT * FROM users WHERE username='$username'";
      $run=mysql_query("$query");
      if(mysql_num_rows($run) > 0) {
        session_destroy();
        header("location: login_rec.php");
        exit();
      }
    }

    if(isset($_GET['js_id']))
    {
      $id=$_GET['js_id'];
      // $job_id=$_GET['job_id'];
      $query = mysql_query("UPDATE jobnseeker SET status='Selected' WHERE js_id='$id'");
      while($row = mysql_fetch_array($query)) {
        $job_id = $row[2];
      }
      echo "<script>alert('$job_id')</script>";
      echo "<script> window.open('applicants.php?job_id=$job_id', '_self') </script>";
    }
?>