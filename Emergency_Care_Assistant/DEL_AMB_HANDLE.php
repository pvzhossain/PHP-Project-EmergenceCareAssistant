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
					<h1 class="page-title">Remove Ambulence </h1>
			   <form class="amblist" action="DEL_AMB.PHP" method="POST">
						
						<div>

                                <input type="text" placeholder="Ambulence ID" name="AMBULENCE_ID">
                            </div>
						
						


                                <button class="register-button" type="submit" name="del">DELETE</button>
						
				</form>
                    <!--<form action="http://localhost:80/Project/insert.php" method="POST" class="reg-button">
						<input type="submit" name="login-button" value="Confirm"/>
                    </form>-->
					
				</article>
			</div>
		</section>
		<p><b><a href="seeAmbulence.php">BACK</a></b></p>
		<footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>
		
		<style>
			button{
		      margin-left: 50px;
		      margin-top:15px;
		      width: 100px;
		      height: 32px;
		      background: #907F7A;
		      border: none;
		      border-radius: 20px;
		      color: #fff;
		      transition: 0.2s ease;
		      cursor: pointer;
    		}
		</style>
		
		 
	</body>
</html>
