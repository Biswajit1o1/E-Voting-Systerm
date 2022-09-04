<?php
	session_start();
	include("connection.php");
	error_reporting(0);
	
?>

<html>
	<head>
		<title>Vote</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/custom.css">
		<link rel="stylesheet" type="text/css" href="stylevoteid.php"/>
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
				<a id="LinkClose" href="Vote1.php" class="close">&times;</a>
				</div>	
						</div>
					</div>
				</div>
				<?php
				
				unset($_SESSION['status']);
			}
			session_destroy();
		?>
		<div class="main">
		<span style="padding-left:60%;">
		<a href="Log in page.php" class="btn">Back</a>
			<div class="register">
			<br><br>
				<h2>Voter Id</h2>
				<form id="register" action="votep.php" method="POST">
				
				<span style="padding-left:px;">
				<label>Voter Id:</label>
				<span style="padding-left:65px;">
				<input type="text" name="voteid" id="voteid" placeholder="Voter Id" required>
					<br><br><br><br>
				<input type="submit" value="Submit" name="Submit" id="Submit" >
				</form>
			</div>
			</div>
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" ></script>
	</body>
</html>





