
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="projectvote";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "Connection ok";
}
else
{
	echo "Connection Failed".mysqli_connect_error();
}

?>