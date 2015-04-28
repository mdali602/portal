<?php

    session_start();
    if(!$username=$_SESSION['username'])
    {
      header("location: login_rec.php");
    }
    
    mysql_connect("localhost", "root", "ali");
    mysql_select_db("job_portal");
    if(isset($_GET['job_id']))
    {

      $job_id=$_GET['job_id'];
      $query=mysql_query("select a.seekername, b.username, b.resname from jobnseeker a, users_info b where a.seekername = b.username and j_id = 7;");
      // $count=0;
      // $arr = array();
      while($row=mysql_fetch_array($query)) {
        // $arr = $row[1];
        // echo "Inside While!";
        echo $row[1]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo $row[2]."</br>";
        
        // $count++;
      }

      // print_r($arr);
/*
      foreach ($arr as $value) {
        # code...
        echo "Inside for!";
        echo $value."<br>";
      }
*/
/*      for($i=0; $i<$count; $i++) {
        echo "Inside for!\n";
        $val=$arr[$i];
      }
*/
    }
?>