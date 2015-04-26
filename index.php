<html>

<head>
	<title>view jobs</title>
</head>

<body>
	<table width='800' align='center' border='5'>

		<?php
			mysql_connect("localhost", "root", "ali");
			mysql_select_db("job_portal");

			$query="SELECT * FROM job";
// 			$query1="SELECT * FROM recruiters";

			$run=mysql_query($query);
// 			$run1=mysql_query($query1);

			while($row=mysql_fetch_array($run)) {
				$jobname=$row[1];
				$compname=$row[7];
				$location=$row[2];
				$exp=$row[3];
				$salary=$row[4];
// 				$jobdesc=$row[5];
// 				$skills=$row[6];
		?>
			<tr align='center'>
				<td> <?php echo $jobname; ?> </td>
				<td> <?php echo $compname; ?> </td>
				<td> <?php echo $location; ?> </td>
				<td> <?php echo $exp; ?> </td>
				<td> <?php echo $salary; ?> </td>
<!-- 				<td> <?php echo $jobdesc; ?> </td> -->
<!-- 				<td> <?php echo $skills; ?> </td></br> -->
			</tr>

		<?php }	?>
	</table>
</body>
</html>