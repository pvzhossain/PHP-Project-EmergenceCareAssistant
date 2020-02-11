<?php include('reg.php')?>
<!DOCTYPE html>
<html>
	<head>
		<title> ECA </title>
		<link rel="stylesheet" type="text/css"
		href="ECA.css">
	</head>

	<body>
		<header>
			<div class="container">
				<div id="branding">
					<!--<h1>ECA</h1>-->
					<a href="ECA.php"><img width="50" height="30" src="ECAlogo.png"></a>
				</div>
				<nav>
					<ul>
						<li><a href="admin.php">Home</a></li>
						<li class="current"><a href="seeAmbulence.php">See Ambulence</a></li>
						<li class="current"><a href="seeDriver.php">See Driver</a></li>
						<li class="current"><a href="seeDoctor.php">See Doctor</a></li>
						<!--<li class="current"><a href="#">Remove Doctor</a></li>-->
						<li class="current"><a href="seepost.php">Doctor POst</a></li>
						<li class="current"><a href="seereserve.php">Check Reservation</a></li>
						<li><a href="adminpro.php">Profile</a></li>
						<li><a href="adminlogin.php">Logout</a></li>
					</ul>
				</nav>
			</div>
		</header>
		
		<section id="showcase">
			<!--<div class="container">
				<h1>Emergency Care Assistant 24/7</h1>
			</div>-->
		</section>
		<section id="boxes">
			<div class="container">
				<div class="box">
					<img width="200" height="200" src="ambulanceicon.png">
					<h3>Ambulance</h3>
					<!--<p>Follow us on facebook</p>-->
				</div>
			
				<div class="box">
					<img width="200" height="200" src="amb24.png">
					<h3>24/7</h3>
					<!--<p>We Care For You</p>-->
				</div>
			
				<div class="box">
					<img width="200" height="200" src="doctoricon.png">
					<h3>Emergency Doctor</h3>
					<!--<p>Follow us on Google plus</p>-->
				</div>
			</div>
		</section>


		<footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>
	</body>
</html>