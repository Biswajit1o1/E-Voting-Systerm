<?php
		session_start();
		include("connection.php");
		error_reporting(0);
?>

<?php
	if(isset($_POST['Submit']))
	{
		$id=$_POST['voteid'];
	
		$query=mysqli_query($conn,"SELECT*FROM VOTEID WHERE voteid='$id'");
			if(mysqli_num_rows($query)==0)
			{
				$sql="INSERT INTO VOTEID (voteid) VALUES('$id')";
				$data = mysqli_query($conn,$sql);
				if($data ==1)
				{
					header("Location: Form B.php");
				}
				else
				{
					echo"";
				}
			}
			else
			{
				$_SESSION['status']="Data already exists";
				header("location: Vote1.php");
			}	
	}
?>