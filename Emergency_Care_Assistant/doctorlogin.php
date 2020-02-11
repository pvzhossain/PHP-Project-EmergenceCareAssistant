<?php include('doctorlog.php');

if(isset($_GET['logout'])){
    ///echo "logout found";
    session_start();
    session_unset();
    session_destroy();
}
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
						<li><a href="ECA.php">Home</a></li>
						<!--<li><a href="about.php">About</a></li>
						<li><a href="doctor.php">Emergency Doctor</a></li>
						<li><a href="emramb.php">Emergency Ambulance</a></li>
						<li><a href="reserve.php">Reserve Ambulance</a></li>
						<li><a href="feedback.php">Give us Feedback</a></li>-->
						<li><a href="register.php">Register</a></li>
						<li><a href="login.php">USER Login</a></li>
						<li><a href="adminlogin.php">ADMIN Login</a></li>
						<li class="current"><a href="doctorlogin.php">DOCTOR Login</a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section id="login">
			<div class="container">
				<article id="main-collogin">
					<h1 class="page-title">Doctor Login</h1>
                    
					<form action="doctorlogin.php" method="POST" class="login">
						<?php include('error.php'); ?>
                        <div>
							<input type="text" placeholder="Email Address" name="DOCTOR_EMAIL">
						</div>
						<div>
							
							<input type="password" maxlength="50" placeholder="Password" name="DOCTOR_PASSWORD">
						</div>
                        <button type="submit" class="login-button" name="dlogbutton">Login</button>
					</form>
                    <!--<form class="login-button">
						<input type="submit" name="login-button" value="Login"/>
                    </form>-->
					
				</article>
			</div>
		</section>
		
		<footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>
	</body>
</html>