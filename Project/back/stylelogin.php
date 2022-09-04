<?php
	header('Content-type: text/css; charset:UTF-8');

?>


body
{
	margin: 0;
	padding:0;
	font-family: sans-serif;
	background-image: url(log1.jpg);
	background-size: 100%;
	background-position: 100%;
}
.box
{
	width: 300px;
	padding: 40px;
	position: absolute;
	top: 40%;
	left: 50%;
	border-radius: 15px 15px 15px 15px;
	transform: translate(-50%,-50%);
	background: #636e72;
	text-align: center;
}
.box h1
{
	color: white;
	text-transform: uppercase;
	font-weight: 500;
}
.box input[type = "text"],.box input[type="password"]
{
	border:0;
	background:#74b9ff;
	display:block;
	margin: 20px auto;
	text-align:center;
	border: 2px solid #f5f6fa;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s
}
.box input[type = "text"]:focus,.box input[type="password"]:focus
{
	width: 280px;
	border-color: #74b9ff;
}
.box input[type = "submit"]
{
	border:0;
	background:#81ecec;
	display:block;
	margin: 20px auto;
	text-align:center;
	border: 2px solid #f5f6fa;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
}
.box input[type = "submit"]:hover
{
	background: #55efc4;
}
	
	
	
	