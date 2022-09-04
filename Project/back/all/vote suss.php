<?php
	include("connection.php");
	error_reporting(0);
?>


<html>
	<head>
		<title>Voat Compleat</title>
		
	</head>
	<body>
		<h1>Voat Sucessful</h1>
	</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$ve=$_POST['choose'];
	
	$query="INSERT INTO ALL_VOTE VALUES('$ve')";
	$data=mysqli_query($conn,$query);
	if($data)
	{
		//echo"Data inserted into all vote";
	}
	else
	{
		echo"Failed to insert into all vote";
	}
}
?>