<?php
	session_start();
	include("connection.php");
	error_reporting(0);
?>


<html>
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/custom.css">
		<link rel="stylesheet" href="styleform_a.php" type="text/css">
	</head>

	<body>
		<?php
			if(isset($_SESSION['status']))
			{	
				?>
				<div class="container">
					<div class "row justify-content-center">
						<div class "col lg3">
					
				<div class="alert alert-danger  d-flex  align-items-center alert-dismissible fade show" role="alert" >
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
				<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
				</svg>
				<div>
					<?php echo $_SESSION['status']; ?>
				</div>
				<span style="padding-left:990px;"> 
				<a id="LinkClose" href="Form A.php" class="close ">&times;</a>
				</div>	
						</div>
					</div>
				</div>
				<?php
				
				unset($_SESSION['status']);
			}
		?>
		<a href="Log in page.php" class="btn">Back</a>
			<div class="main">
			<div class="register">
			<br><br>
				<h2>Registration Form</h2>
				<form id="register" action="formap.php" method="POST"/>
				
				<label>First Name:</label>
				<span style="padding-left:65px;">
				<input type="text" name="First_Name" id="name" placeholder="Enter Your First name" required> 
				<span style="padding-left:30px;">
				
				<label>Last Name:</label>
				<span style="padding-left:50px;">
				<input type="text" name="Last_Name" id="name" placeholder="Enter Your Last name" required>
				<span style="padding-left:30px;">
				<br>
				
				<label>Father's name:</label>
				<span style="padding-left:38px;">
				<input type="text" name="Fathers_Name" id="name" placeholder="Father's name" required>
				<span style="padding-left:35px;">
				
				<label>Mother's Name:</label>
				<span style="padding-left:10px;">
				<input type="text" name="Mothers_Name" id="name" placeholder="Mother's name" required>
				<br><br>
				
				<label>Address:</label>
				<span style="padding-left:87px;">  
				<input type="text" name="Address" id="name" placeholder="Enter Your Address" required>
				<span style="padding-left:40px;">
				
				<label>Email:</label>
				<span style="padding-left:82px;">
				<input type="text" name="Email" id="name" placeholder="Enter Your Email" required>
				<br><br>
				
				<label>Age:</label>
				<span style="padding-left:120px;">
				<input type="number" name="age" id="name" placeholder="Enter Your age" required>
				<span style="padding-left:44px;">
				
				<label>State:</label>
				<span style="padding-left:81px;"> 
				<input type="text" name="State" id="name" placeholder="Enter Your State" required>
				<br><br>
				
				<label>District:</label>
				<span style="padding-left:97px;"> 
				<input type="text" name="District" id="name" placeholder="Enter Your district" required>
				<span style="padding-left:41px;"> 
				
				<label>Country:</label>
				<span style="padding-left:63px;"> 
				<input type="text" name="Country" id="name" placeholder="Enter Your Country" required>
				<br><br>
				
				<label>PIN Code:</label>
				<span style="padding-left:75px;"> 
				<input type="number" name="PIN" id="name" placeholder="Enter Your PIN" required>
				<br><br><br>
				
				<label>Gender:</label>
				
				<span style="padding-left:150px;"> 
				<input type="Radio" name="Gender" id="male" value="male" >
				<span style="padding-left:10px;"> 
				<span id="male">Male</span>
				
				<span style="padding-left:30px;">
				<input type="Radio" name="Gender" id="female" value="female" >
				<span style="padding-left:10px;"> 
				<span id="Female">Female</span>
				
				<br><br><br>
				
				<label>Regional Language:</label>
				
				<span style="padding-left:54px;"> 
				<input type="checkbox" value="English" name="Lang[]" id="eng">
				<span style="padding-left:10px;">
				<span id="eng">English</span>
				
				<span style="padding-left:30px;">
				<input type="checkbox" value="Hindi" name="Lang[]" id="hindi">
				<span style="padding-left:10px;">
				<span id="hindi">Hindi</span>
				
				<span style="padding-left:30px;">
				<input type="checkbox" value="Odia" name="Lang[]" id="odia">
				<span style="padding-left:10px;">
				<span id="odia">Odia</span>
				
				
				<input type="submit" value="submit" name="submit" id="submit">
				<br><br>
				</form>
				<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
			</div>
			</div>
	</body>
</html>



