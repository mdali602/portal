<form action="upload.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="file"></br></br>
  <input type="submit" value="upload" name="upload">
</form>

<?php
  session_start();
  if(!$_SESSION['username'])
  {
    header("location: login.php");
  }
  
  echo $error=$_FILES['file']['error'];
  if (isset($_POST['upload']))
  {
    echo "</br>";
    echo $username=$_SESSION['username'];echo "</br>";
    
    echo $name=$_FILES['file']['name'];echo "</br>";
    echo $size=$_FILES['file']['size'];echo "</br>";
    echo $type=$_FILES['file']['type'];echo "</br>";

    echo $tmp_name=$_FILES['file']['tmp_name'];echo "</br>";
    if (!empty($name))
    {   
      $location='uploads/$username/';
      echo $location;
      if (move_uploaded_file($tmp_name, $location.$name))
      {
	echo 'File Uploaded!';
      }  
      else
      {
	echo 'There is an error!';
	echo $error=$_FILES['file']['error'];
      }
    }
    else
    {
      echo 'Please! choose a file.';
    }
  }
?>
