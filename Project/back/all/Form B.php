<?php
	include("connection.php");
	error_reporting(0);
?>

<html lang="en" dir="Itr">
	<head>

		<title>Party Selection</title>
		<link rel="stylesheet" href="assets/css/bootstrap.css">
		<link rel="stylesheet" href="assets/css/custom.css">
		<link rel="stylesheet" href="stylesform_b.php">
	</head>
	<body>
	
	<style>
	.sub
	{
		position: absolute;
		top: 1220px;
		left:854px;
		width:10%;
		display: inline-block;
		text-align: center;
		background: #3f51b5;
		padding: 10px 15px;
		font-size:20px;
		font-weight: bold;
		border-radius: 30px;
		cursor: pointer;
		color: #fff;
		text-decoration:none;
	}
	.foot
	{
		text-align: center;
		background-color: #333;
		color: #fff;
		padding: 20px;
		min-height: ( 100vh-211px-58px);
	}
	.head
	{
		text-align: center;
		background-color: #333;
		color: #fff;
		padding: 30px;
		
	}
	.back
	{
		font-family: arial;
		text-transform: uppercase;
		font-size: 20px;
		width: 160px;
		height: 50px;
		border-radius: 80px;
		line-height: 40px;
		text-align: center;
		border: 3px solid #3742fa;
		display: block;
		text-decoration: none;
		padding:2px;
		margin: 0px 30px;
		color: #ced6e0;
		position: relative;
		overflow: hidden;
		background: transparent;
		transition: .3s;
	}
.back:before{
  content: '';
  width: 100%;
  height:100%;
  position: absolute;
  background:#3742fa;
  opacity: .5;
  top: -100;
  left: 0;
  z-index: -1;
  
}
.back:after{
  content: '';
  width: 100%;
  height:100%;
  position: absolute;
  background:#3742fa;
  top: -100;
  left: 0;
  z-index: -1;  
  transition: .3s;
  transition-delay: .2s;
}
.back:hover{
  color:#fff;	
}
.back:hover:before{
  top: 0;	
}
.back:hover:after{
  top: 0;	
}
	.btn body
	{
		margin: 0;
		padding:0;
		background: #55efc4;
		display: flex;
		min-height: 100%
		font-family: 'Poppins',sans-serif;
	}
	.btn
	{
		max-width: 1200px;
		margin: 0 auto;
		padding-left:65px;
		display: flex;
		flex-wrap: wrap;
	}
	.btn div
	{
		margin: 10px;
	}
	.btn div label
	{
		cursor: pointer;
	}
	.btn div label input[type="radio"]
	{
		display:none;	
	}
	.btn div label span
	{
		position: relative;
		display: inline-block;
		background: #00B894;
		padding: 15px 30px;
		color: #555;
		text-shadow: 0 1px 4px rgba(0,0,0,.5);
		border-radius: 30px;
		font-size: 20px;
		transition: 0.5s;
		user-select: none;
		overflow: hidden;
	}
	.btn div label span:before
	{
		content: '';
		position: absolute;
		top:0;
		left:0px;
		width: 100%;
		height:50%;
		background: rgba(85,239,196,.3);	
	}
	.btn div:nth-child(6n + 1) label input[type="radio"]:checked~span
	{
			background:#55efc4;
			color: #fff;
			box-shadow: 0 2px 20px #55efc4;
	}
	

	</style>
		<header class="head">
			<h1>WELCOME TO OUR WEBSITE</h1>
		</header>
		<br><br><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="../home page/main.php" class="back">Home</a>
		
		
		<center>
			<img src="v1.png" alt="Logo" style="width:10%">
		</center>
			<div class="wrapper">
			<form id="wrapper" action="../home page/vote suss/index.php" method="POST"/>
				<h1>Choose A Party</h1>
				<br><br><br>
			<div class="team">
		
			
				<div class="team_member">
					<div class="team_img">
						<img src="c1.png" alt="Team_image">
					</div>
					
						<h3>National People's Party </h3>
						<p class="role">Politcal Party</p>
						<p> Currently it is a part of North-East Regional Political
						Front consisting of political parties of the northeast which
						has supported the National Democratic Alliance.In 2015, in a
						rare move election commission has suspended NPP for its
						failure to provide party's expenditure during Lok Sabha
						Elections held in 2014</p>
						<br>
					<div class="btn">
						<div>
							<label>
								<input type="radio" name="choose" id="a" value="A"><span>Vote</span>
							</label>
						</div>
					</div>
				</div>
				
				<div class="team_member">
					<div class="team_img">
						<img src="c2.png" alt="Team_image">
					</div>
					
						<h3>Communist Party of India</h3>
						<p class="role">Politcal Party</p>
						<p>CPI(M) is officially known as Bharat
						ki Kamyunist Party Marksvadi in Hindi, but it is often known
						as Marksvadi Kamyunist Party in press and media circles. During its initial years after
						the split, the party was often referred to by different names
						such as 'Left Communist Party' or 'Communist Party of India
						(Left)'. </p>
						<br>
						
					<div class="btn">
						<div>
							<label>
								<input type="radio" name="choose" id="b" value="B"><span>Vote</span>
							</label>
						</div>
					</div>
						
				</div>
				
				<div class="team_member">
					<div class="team_img">
						<img src="c3.png" alt="Team_image">
					</div>
					
						<h3>Indian National Lok Dal</h3>
						<p class="role">Politcal Party</p>
						<p>INLD has performed poorly in all the four consecutive
						general elections held since 1998.[2] It lost consecutive
						assembly elections for Haryana in 2005, 2009 and 2013. 
						It failed to win any seats in Lok Sabha in 2004 and 2009 
						general elections, despite being in alliance with Bharatiya
						Janata Party in 2009. </p>
						<br>
						
					<div class="btn">
						<div>
							<label>
								<input type="radio" name="choose" id="c" value="C"><span>Vote</span>
							</label>
						</div>
					</div>
						
				</div>
				
				<div class="team_member">
					<div class="team_img">
						<img src="c4.png" alt="Team_image">
					</div>
					
						<h3>Rashtriya Lok Dal </h3>
						<p class="role">Politcal Party</p>
						<p>In 2002, party had two cabinet ministers in chief minister
						ms. Mayawati's cabinet. From 2003 to 2007, the party had
						six ministers in the Uttar Pradesh government.In 2004
						Lok Sabha elections, RLD contested in alliance with the
						Samajwadi Party. RLD contested only in the western part of
						Uttar Pradesh.
						</p>
						<br>
			
					
					<div class="btn">
						<div>
							<label>
								<input type="radio" name="choose" id="d" value="D"><span>Vote</span>
							</label>
						</div>
					</div>
				</div>
	
			
			</div>
				<input type="submit" value="submit" name="submit" class="sub"></a>
			</div>
				
			
					
			
			<br><br>
			<footer class="foot">
				<p>Copyright &copy; 2021,Group I </p>
			</footer>
			
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" ></script>
	</body>

</html>
		




