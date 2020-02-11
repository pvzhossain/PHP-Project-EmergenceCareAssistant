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
					<h1 class="page-title">Remove Driver</h1>
			   <form class="amblist" action="DEL_DRIVER.PHP" method="POST">
						
						<div>
                            <input type="text" placeholder="Enter Driver ID" name="DRIVER_ID">
                        </div>

                        <button class="register-button" type="submit" name="del">Remove</button>
						
				</form>
                    
				</article>
			</div>
		</section>
		<p><b><a href="seeDriver.php">BACK</a></b></p>
		<footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>
		
<style>
  button
  {
    margin-bottom: 20px;
    margin-top: 10px;
    margin-left:50px;
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
