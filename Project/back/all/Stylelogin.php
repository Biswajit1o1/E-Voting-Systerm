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
.btn{
  font-family: arial;
  text-transform: uppercase;
  font-size: 20px;
  width: 140px;
  height: 40px;
  border-radius: 80px;
  line-height: 30px;
  text-align: center;
  border: 3px solid #74b9ff;
  display: block;
  text-decoration: none;
  padding:2px;
  margin: 0px 285%;
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
.box
{
	width: 400px;
	padding: 40px;
	position: absolute;
	top: 40%;
	left: 50%;
	border-radius: 20px 20px 20px 20px;
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
	border-radius: 30px;
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
	border-radius: 30px;
	transition: 0.25s;
	cursor: pointer;
}
.box input[type = "submit"]:hover
{
	background: #55efc4;
}
	
	
	
	