<?php session_start(); ?>
<!DOCTYPE html>
	<head>
		<title> ECA </title>
		<link rel="stylesheet" type="text/css"
		href="ECA.css">
	</head>
<html>


		<section id="reg">
			<div class="container">
				<article id="main-colregister">
					<h1 class="page-title">ADD DRIVER</h1>
			   <form class="amblist" action="DRIVER_ADD_DATABASE.php" method="POST">
						
						    <div>

                                <input type="text" placeholder="Driver Name" name="DRIVER_NAME">
                            </div>
							<div>

                                <input type="text" placeholder="Driver Email" name="DRIVER_EMAIL">
                            </div>
							<div>

                                <input type="text" maxlength="11" placeholder="Driver Phone Number" name="DRIVER_PHONE_NUMBER">
                            </div>
						    <div>

                                <input type="text" placeholder="Ambulence ID" name="AMBULENCE_ID">
                            </div>

                            <button class="register-button" type="submit" name="DRVR">Confirm</button>
								
				</form>
				
					
				</article>
			</div>
		</section>
				
		<p><b><a href="seeDriver.php">BACK</a></b></p>
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