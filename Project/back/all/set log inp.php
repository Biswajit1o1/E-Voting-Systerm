<?php
	session_start();
	include("connection.php");
	error_reporting(0);
?>
<?php

if(isset($_POST['submit']))
{
	$un=$_POST['username'];
	$pas=$_POST['password'];
	
	$query=mysqli_query($conn,"SELECT*FROM login WHERE username='$un' && password='$pas'");
			if(mysqli_num_rows($query)==0)
			{
				$log="INSERT INTO login (Username,Password) VALUES('$un','$pas')";
				$data=mysqli_query($conn,$log);
				
				if($data==1)
				{
					header("Location: Log in page.php");
				//	echo"data inserted";
				}
				else
				{
				//	echo"data not inserted";
				}
			}
			else
			{
				$_SESSION['status']="Data already exists";
				header("location:set log in.php");
			}
	}

?>
