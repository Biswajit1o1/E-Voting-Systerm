<?php
	include("connection.php");
	error_reporting(0);
?>


<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" href="styleform_a.php" type="text/css">
	</head>

	<body>
			<div class="main">
			<div class="register">
			<br><br>
				<h2>Registration Form</h2>
				<form id="register" method="post" action="C:\xampp\htdocs\Project\Set log in\set log in.html">
				
				<label>First Name:</label>
				<span style="padding-left:65px;">
				<input type="text"name="fname"id="name" placeholder="Enter Your First name">
				<span style="padding-left:30px;">
				
				<label>Last Name:</label>
				<span style="padding-left:50px;">
				<input type="text"name="lname"id="name" placeholder="Enter Your Last name">
				<span style="padding-left:30px;">
				<br>
				
				<label>Father's name:</label>
				<span style="padding-left:38px;">
				<input type="text"name="faname"id="name" placeholder="Father's name">
				<span style="padding-left:35px;">
				
				<label>Mother's Name:</label>
				<span style="padding-left:10px;">
				<input type="text"name="mname"id="name" placeholder="Mother's name">
				<br><br>
				
				<label>Address:</label>
				<span style="padding-left:87px;">  
				<input type="text"name="Address"id="name" placeholder="Enter Your Address">
				<span style="padding-left:40px;">
				
				<label>Email:</label>
				<span style="padding-left:82px;">
				<input type="text"name="email"id="name" placeholder="Enter Your Email">
				<br><br>
				
				<label>Age:</label>
				<span style="padding-left:120px;">
				<input type="number"name="age"id="name" placeholder="Enter Your age">
				<span style="padding-left:44px;">
				
				<label>State:</label>
				<span style="padding-left:81px;"> 
				<input type="text"name="State"id="name" placeholder="Enter Your State">
				<br><br>
				
				<label>District:</label>
				<span style="padding-left:97px;"> 
				<input type="text"name="District"id="name" placeholder="Enter Your district">
				<span style="padding-left:41px;"> 
				
				<label>Country:</label>
				<span style="padding-left:63px;"> 
				<input type="text"name="country"id="name" placeholder="Enter Your Country">
				<br><br>
				
				<label>PIN Code:</label>
				<span style="padding-left:75px;"> 
				<input type="number"name="PIN"id="name" placeholder="Enter Your PIN">
				<br><br><br>
				
				<label>Gender:</label>
				<span style="padding-left:150px;"> 
				<input type="Radio"name="gender"id="male">
				<span style="padding-left:10px;"> 
				<span id="male">Male</span>
				<span style="padding-left:30px;">
				<input type="Radio"name="gender"id="Female">
				<span style="padding-left:10px;"> 
				<span id="Female">Female</span>
				<br><br><br>
				
				<label>Regional Language:</label>
				<span style="padding-left:54px;"> 
				<input type="checkbox"name="RLang"id="eng">
				<span style="padding-left:10px;">
				<span id="eng">English</span>
				<span style="padding-left:30px;">
				<input type="checkbox"name="RLang"id="hindi">
				<span style="padding-left:10px;">
				<span id="hindi">Hindi</span>
				<span style="padding-left:30px;">
				<input type="checkbox"name="RLang"id="hindi">
				<span style="padding-left:10px;">
				<span id="odia">Odia</span>
				<br><br><br><br>
				<input type="submit"value="Submit"name="submit"id="submit">
				</form>
			</div>
			</div>
	</body>
</html>


