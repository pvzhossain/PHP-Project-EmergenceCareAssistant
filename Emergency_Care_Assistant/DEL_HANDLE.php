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
					<h1 class="page-title">DELETE RESERVATION</h1>
			   <form class="amblist" action="DEL_RESERVE.PHP" method="POST">
						
						<div>
                            <input type="text" placeholder="Enter Reserve ID" name="RESERVE_ID">
                        </div>

                        <button class="register-button" type="submit" name="de">DELETE</button>
						
				</form>
					
				</article>
			</div>
		</section>
		
		<footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>

		<style>
			button{
				margin-left: 35px;
				margin-top:10px;
			    width: 120px;
			    height: 32px;
			    background: #21C040;
			    border: none;
			    border-radius: 20px;
			    color: #fff;
			    transition: 0.2s ease;
			    cursor: pointer;
			}
		</style>
		
		
		 <!--<p><b><a href="seeReserve.php">BACK</a></b></p>-->
	</body>
</html>
