<?php

	mysql_connect("mysql4.000webhost.com", "a6643065_mysql", "mysql602");
        mysql_select_db("a6643065_db");

	if($_POST['submit']) {

		echo $email=$_GET['email'];
                echo $password=$_POST['password'];
                echo $confirm_password=$_POST['confirm_password'];

                if($password != $confirm_password) {
                        echo "<script>alert('Please make sure that You have entered same password again!')</script>";
                        exit();
                }
		
                mysql_query("UPDATE users SET password='$password' WHERE email='$email'");
                $random=rand(199, 999);
		$code=md5($random);

                mysql_query("UPDATE reset_pass SET code='$code' WHERE email='$email'");
                echo "<script>alert('Your password has been reset!')</script>";
                //echo "<script> window.open('login.php', '_self')</script>";
	}

?>