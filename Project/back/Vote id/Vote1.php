<?php
	include("connection.php");
	error_reporting(0);
?>

<html>
	<head>
		<title>Vote</title>
		<link rel="stylesheet" type="text/css" href="stylevoteid.php"/>
	</head>

	<body>		
		<div class="main">
			<div class="register">
			<br><br>
				<h2>Voter Id</h2>
				<form id="register" action="C:\xampp\htdocs\Project\Form bB CSS\Form B.html" method="POST" >
				
				<span style="padding-left:px;">
				<label>Voter Id:</label>
				<span style="padding-left:65px;">
				<input type="text" name="voteno" id="name" placeholder="Voter Id" required>
					<br><br><br><br>
				<input type="submit"value="Submit"name="submit"id="submit">
				
				</form>
			</div>
			</div>
	</body>
</html>

<?php

if(isset($_POST['submit']))
{
	$vn=$_POST['voteno']; 

	if($vn!="")
	{
	
		$query="INSERT INTO VOTE VALUES ('$vn')";
		$data=mysqli_query($conn,$query);

		if($data)
		{
		echo "data insearted into database";
		}
		else
		{
		echo "failed to insert data into database";
		}
	}
}
?>