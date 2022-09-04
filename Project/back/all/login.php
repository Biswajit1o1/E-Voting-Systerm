<?php
	session_start();
	include("connection.php");
	error_reporting(0);
?>
<?php
		if(isset($_POST['submit1']))
		{
			$un=$_POST['username'];
			$pas=$_POST['password'];
	
			$query=mysqli_query($conn,"SELECT*FROM LOGIN WHERE username='$un' && password='$pas'");
			if(mysqli_num_rows($query)>0)
			{
				header("location: Vote1.php");
			}
			else
			{
				$_SESSION['status']="Wrong Userid or password";
				header("location:Log in page.php");
			}
		}
?>