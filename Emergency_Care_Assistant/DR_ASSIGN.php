<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> ECA </title>
		<link rel="stylesheet" type="text/css"
		href="ECA.css">
	</head>

	<body>

		<section id="reg">
			<div class="container">
				<article id="main-colregister">
					<h1 class="page-title">DOCTOR ASSIGN</h1>
			   <form class="amblist" action="DR_INSERT.PHP" method="POST">
						
						<div>

                                <input type="text" placeholder="DOCTOR_ID" name="DOCTOR_ID">
                            </div>
						
						


                                <button class="register-button" type="submit" name="insert">ASSIGN</button>
						
				</form>
                    <!--<form action="http://localhost:80/Project/insert.php" method="POST" class="reg-button">
						<input type="submit" name="login-button" value="Confirm"/>
                    </form>-->
					
				</article>
			</div>
		</section>
		
		<footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>
		
		
		 <p><b><a href="seeDoctor.php">BACK</a></b></p>
	</body>
</html>
