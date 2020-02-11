<?php
    session_start();

if($_SESSION['success']!="YES"){
    session_unset();
    session_destroy();
    header('location:login.php');
}else{

?>
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
							<li><a href="user.php">Home</a></li>
							<li class="current"><a href="about.php">About</a></li>
							<li><a href="doctor.php">Emergency Doctor</a></li>
							<!--<li><a href="emramb.php">Emergency Ambulance</a></li>-->
							<li><a href="reserve.php">Reserve Ambulance</a></li>
							<li><a href="feedback.php">Give us Feedback</a></li>
							<!--<li><a href="register.php">Register</a></li>
							<li><a href="login.php">Login</a></li>-->
						</ul>
					</nav>
				</div>
		</header>

		<section id="about">
			<div class="container">
				<article id="main-col">
					<h1 class="page-title">About Us</h1>
					<p>
						Welcome to Emergency Care Assistant.
						We provide our dedicated doctor for any emergency case.
						You can reserve amboulance.
						<br>Thank you.
					</p>
				</article>
			</div>
		</section>
		
		<footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>
	</body>
</html>
<?php
}
?>