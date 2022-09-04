<?php
	header('Content-type: text/css; charset:UTF-8');

?>


*{
	margin: 0;
	padding: 0;
}
body
{
	background: url(bg1.jpg) no-repeat center;
	background-size: 100%;
	background-position: 100%;
}
.btn{
  font-family: arial;
  text-transform: uppercase;
  font-size: 20px;
  width: 160px;
  height: 50px;
  border-radius: 80px;
  line-height: 40px;
  text-align: center;
  border: 3px solid #74b9ff;
  display: block;
  text-decoration: none;
  padding:2px;
  margin: 0px 1080px;
  color: #74b9ff;
  position: relative;
  overflow: hidden;
  background: transparent;
  transition: .3s;
}
.btn:before{
  content: '';
  width: 100%;
  height:100%;
  position: absolute;
  background:#74b9ff;
  opacity: .5;
  top: -100;
  left: 0;
  z-index: -1;
  
}
.btn:after{
  content: '';
  width: 100%;
  height:100%;
  position: absolute;
  background:#74b9ff;
  top: -100;
  left: 0;
  z-index: -1;  
  transition: .3s;
  transition-delay: .2s;
}
.btn:hover{
  color:#fff;	
}
.btn:hover:before{
  top: 0;	
}
.btn:hover:after{
  top: 0;	
}
div.main
{
	width: 400px;
	height: 1000px;
	position: absolute;
	top: 10%;
	left: 28%;
	<margin: 100px auto 100px auto;>
}
h2
{
	text-align: center;
	padding: 20px;
	left:25%;
	font-family: sans-serif;
	font-size:45px;
}
div.register
{
	background: url("bg9.jpg");
	background-size: 100;
	width: 800px;
	font-size: 18px;
	border-radius: 15px 15px 15px 15px;
	border:1px solid #2d3436;
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#2d3436;
	
}
form#register
{
	margin: 40px;
	height:170px;
}
label
{
	font-family: sans-serif;
	font-size: 18ps;
	font-style: italic;
}
input#name
{
	width:300px;
	border: 1px solid #74b9ff;
	border-radius:3px;
	outline:0;
	padding: 7px;
	background-color: #fff;
	box-shadow: inset 1px 1px 5px rgba(0,0,0,0.3);
	transition: 0.5s;
}
input#submit
{
	position: absolute;
	left: 70%;
	width:200px;
	padding:7px;
	font-size:16px;
	font-family:sans-serif;
	font-weight: 600;
	border-radius: 24px;
	transition: 0.25s;
	background-color: #55efc4;
	color: #fff;
	cursor: pointer;
	border: 1px solid #636e72;
	box-shadow:1[x 1[x 5[x rgba(0,0,0,0.3);
	margin-bottom:40px;
}
label,span,h2
{
	text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}

<?php
	

	if(isset($_POST['submit']))
	{
		$id=$_POST['voteid'];
	
		$query=mysqli_query($conn,"SELECT*FROM VOTEID WHERE voteid='$id'");
			if(mysqli_num_rows($query)>0)
			{
				$_SESSION['status']="Data already exists";
				header("Location:Vote1.php");
				die();
			}
			else
			{
				$sql="INSERT INTO VOTEID (voteid) VALUES('$id')";
				$data=mysqli_query($conn,$sql);
				
				if(mysqli_query($data))
				{
				//	echo"data inserted";
				}
				else
				{
				//	echo"data not inserted";
				}
			}
	}

?>