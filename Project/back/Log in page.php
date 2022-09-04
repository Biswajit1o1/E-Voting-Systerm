<?php
	include("connection.php");
	error_reporting(0);
?>


 <html>
	<head>
		<title>Log Form</title>
		<link rel="stylesheet" type="text/css" href="Style.php"/>
	</head>
	
	<body>
		<form class="box" action="" method="POST">
		<h1>Login</h1>
			<input type="text" name="uname" placeholder="Username" required>
			<input type="Password" name="pass" placeholder="Password" required>
			<input type="submit" name="submit" value="Login">
			Need an account? <a href="Form A.php">Sign up</a>
		</form>
	</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$un=$_POST['uname'];  
	$pw=$_POST['pass']; 

	if($un!=""&&$pw!="")
	{
	
		$query="INSERT INTO LOGIN VALUES ('$un','$pw')";
		$data=mysqli_query($conn,$query);
		
		
		if($data)
		{
		echo "data insearted into database";
		}
	}
		else
		{
		echo "failed to insert data into database";
		}
	
}
?>

