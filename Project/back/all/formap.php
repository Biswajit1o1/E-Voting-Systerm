<?php
	session_start();
	include("connection.php");

?>

<?php
if(isset($_POST['submit']))
{
	$fn=	$_POST['First_Name'];
	$ln=	$_POST['Last_Name'];
	$fan=	$_POST['Fathers_Name'];
	$mn=	$_POST['Mothers_Name'];
	$ad=	$_POST['Address'];
	$em=	$_POST['Email'];
	$ag=	$_POST['age'];
	$st=	$_POST['State'];
	$dis=	$_POST['District'];
	$con=	$_POST['Country'];
	$pin=	$_POST['PIN'];
	$ge=	$_POST['Gender'];
	$re=	$_POST['Lang'];
	$ck=	implode(",",$re);
	
	$query=mysqli_query($conn,"SELECT*FROM reg WHERE Email='$em'");
		if(mysqli_num_rows($query)==0)
		{
			$tab="INSERT INTO reg (First_Name,Last_Name,Fathers_Name,Mothers_Name,Address,Email,age,State,District,Country,PIN,Gender,Lang) 
			VALUES('$fn','$ln','$fan','$mn','$ad','$em','$ag','$st','$dis','$con','$pin','$ge','$ck')";
			$data=mysqli_query($conn,$tab);
	
			if($data)
			{
				header("location:set log in.php");
				//echo"Data inserted";
			}
			else
			{
				echo"Failed";
			}
		}
		else
		{
			$_SESSION['status']="Data already exists";
			header("location: Form A.php");
		}
	
}
?>