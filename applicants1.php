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
      $query=mysql_query("SELECT * FROM jobnseeker WHERE j_id='$job_id'");
      
      while($row=mysql_fetch_array($query)) {
        echo $row[1].'</br>';
      }
    }
?>