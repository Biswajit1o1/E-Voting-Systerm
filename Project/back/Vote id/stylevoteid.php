<?php
	header('Content-type: text/css; charset:UTF-8');

?>


*{
	margin: 0;
	padding: 0;
}
body
{
	background: lime;
	background-size: 100%;
	background-position: 100%;
}
div.main
{
	width: 400px;
	height: 100px;
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
	background: url("b3.png");
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