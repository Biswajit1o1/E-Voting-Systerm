<?php
	session_start();
	include("connection.php");
	error_reporting(0);
?>

<html>
	<head>
		<title>Set New Username And Password</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/custom.css">
		<link rel="stylesheet" href="set.php" type="text/css">
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
				<span style="padding-left:1050px;"> 
				<a id="LinkClose" href="set log in.php" class="close ">&times;</a>
				</div>	
						</div>
					</div>
				</div>
				<?php
				
				unset($_SESSION['status']);
			}
		?>
		
			<div class="main">
			<div class="register">
			<br><br>
				<h2>Set New Username <br>And Password</h2>
				<form id="register" action="set log inp.php" method="POST"/>
				
				<label>Username:</label>
				<span style="padding-left:65px;">
				<input type="text" name="username" id="name" placeholder="Set Username" required>
				<br><br>
				
				<label>Password:</label>
				<span style="padding-left:69px;">
				<input type="password" name="password" id="name" placeholder="Set Password" required>
				
				<br><br><br><br>
				<input type="submit" value="Submit" name="submit" id="submit">
				
				</form>
			</div>
			</div>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	</body>
</html>


