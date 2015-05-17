<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Login Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
-->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

	<div class="container">    
	    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
	        <div class="panel panel-info" style="width:90%; margin-top:15%;">

	            <div class="panel-heading">
	                <div class="panel-title">Forgot Password</div>
                        <div style="float:right; font-size: 85%; position: relative; top:-10px">Already Registered? <a id="signinlink" href="login.php">Sign In</a></div>
	            </div>     

	            <div style="padding-top:30px" class="panel-body" >

			        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
	                            
	                <form id="loginform" class="form-horizontal" role="form" action="forgot_pass.php" method="POST">

	                    <div class="form-group" style="margin-left: -10%;">
				            <label class="col-lg-3 control-label">Email:</label>
				            <div class="col-lg-8">
				            	<input class="form-control" type="text" name="email" value="" placeholder="Your Email_id" />
				            </div>
				        </div>
	                                    
		                <div style="margin-top:10px" class="form-group">
	                    	<div class="col-sm-12 controls">
					    		<input type="submit" name='submit' class="btn btn-success" value='Submit'>
	                        </div>
	                    </div>


	                    <div class="form-group">
	                        <div class="col-md-12 control">
	                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
	                                Don't have an account! <a href="signup.php" > Sign Up Here</a>
	                            </div>
	                        </div>
	                    </div>

	                </form>
	            </div>                     
	        </div>  
	    </div>      
    </div>

    <script src="form/assets/js/jquery-1.7.1.min.js"></script>

    <script src="form/assets/js/jquery.validate.js"></script> 

    <script src="form/script.js"></script> 
    <script>
	addEventListener('load', prettyPrint, false);
	$(document).ready(function(){
	$('pre').addClass('prettyprint linenums');
	});
    </script> 


<!--
	<form action="forgot_password.php" method="POST">
		Email
		<br><br><input type="text" name="email" placeholder="Your Email_id" /><br><br>
		<input type="submit" name="submit" value="submit" />
	</form>
-->
</body>
</html>

<?php

	mysql_connect("mysql4.000webhost.com", "a6643065_mysql", "mysql602");
        mysql_select_db("a6643065_db");

	if($_POST['submit']) {

		$email=$_POST['email'];
		$query=mysql_query("SELECT * FROM users WHERE email='$email'");
		if(mysql_num_rows($query) > 0) {
			$random=rand(199, 999);
			$code=md5($random);
			$query=mysql_query("SELECT * FROM reset_pass WHERE email='$email'");
			if(mysql_query($query) == 0) {
				mysql_query("INSERT INTO reset_pass (email) values ('$email')");
			}
			mysql_query("UPDATE reset_pass SET code='$code' WHERE email='$email'");
			$subject="Password Reset";
	        $message="Your password reset link is: http://mdali602.site90.com/reset_pass.php?email=$email&code=$code";
			$from="mdali602.site90.com";

		    mail($email, $subject, $message, $from);
            echo "<script>alert('Your new password has been mailed to you. Please check your email!')</script>";
		} else {
			echo "<script>alert('Email doesn't exist in our database!')</script>";
		}
	}

?>	