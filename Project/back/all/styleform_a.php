<?php
	header('Content-type: text/css; charset:UTF-8');

?>


*{
	margin: 0;
	padding: 0;
}
body
{
	background: url("b9.jpg");
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
  margin: 70px 90%;
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
	height:800px;
	position: absolute;
	top: 10%;
	left: 23%;
	<margin: 100px auto 100px auto;>
}
h2
{
	text-align: center;
	padding: 20px;
	font-family: sans-serif;
	font-size:45px;
}
div.register
{
	background: url("b3.png");
	background-size: 100;
	width: 260%;
	font-size: 18px;
	border-radius: 15px 15px 15px 15px;
	border:1px solid #2d3436;
	box-shadow:2px 2px 15px rgba(0,0,0,0.3);
	color:#2d3436;
	
}
form#register
{
	margin: 40px;
	height:650px;
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
  margin: 70px 45% ;
  color: #74b9ff;
  position: relative;
  overflow: hidden;
  background: transparent;
  transition: .3s;
}
input#submit:before{
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
input#submit:after{
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
input#submit:hover{
  color:#fff;	
}
.btn:hover:before{
  top: 0;	
}
input#submit:hover:after{
  top: 0;	
}
label,span,h2
{
	text-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}