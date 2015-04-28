<?php

  session_start();
  if(!$_SESSION['username'])
  {
    header("location: login.php");
  }
  
  $username=$_SESSION['username'];
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
		    $j_id=$row[2];
// 		    $compname=$row[3];
		    /*
		    $query="SELECT * FROM job WHERE job_id='$j_id'";
		    $run=mysql_query($query);*/
// 		    $row=mysql_fetch_array($run);
		    $s_no=0;
		    $status="Applied";
		    while($row=mysql_fetch_array($run)) {
		
			$s_no=$s_no+1;
			$que="SELECT * FROM job WHERE job_id='$j_id'";
			$r=mysql_query($que);
			$ro=mysql_fetch_array($r);
			
			while($ro=mysql_fetch_array($run)) {
			$jobname=$row[1];
			$location=$row[2];
// // 			$exp=$row[3];
			$salary=$row[4];
// 			$jobdesc=$row[5];
// 			$skills=$row[6];
			$compname=$row[7];
// 			$posted=$row[8];
			$closed=$row[9];
		?>
		<tr>			
			<td><?php echo $s_no; ?></td>
			<td><?php echo $compname; ?></td>
			<td><?php echo $jobname; ?></td>
			<td><?php echo $salary; ?></td>
			<td><?php echo $location; ?></td>
			<td><?php echo $status; ?></td>
			<td><?php echo $closed; ?></td>
		<!-- <?php } ?>  -->
		</tr>
		<?php } ?>
		<?php } ?> 
	    </table><!-- </table> -->

	</div>
    
    </div>	<!-- End Container -->

</body>
</html>