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
					<h1 class="page-title">Doctor Registration</h1>
			   <form class="amblist" action="regD.php" method="POST">
						
						    <div>

                                <input type="text" placeholder="Doctor Name" name="DOCTOR_NAME">
                            </div>
							<div>

                                <input type="text" placeholder="Doctor Email" name="DOCTOR_EMAIL">
                            </div>
							<div>

                                <input type="text" maxlength="11" placeholder="Doctor Phone Number" name="DOCTOR_PHONE_NUMBER">
                            <div>

                                <input type="password" maxlength="50" placeholder="Password" name="DOCTOR_PASSWORD">
                            </div>
													<div class="location2">
							<div>
								<select id="area" name="AREA_ID" onchange="readothervalues();">
                                    <option value="-1" selected>Select Area</option>
									<?php
                                    try{
                                    $con=new PDO("mysql:host=localhost;dbname=project",'root','');
                                    	$stmt="select * from area";
                                        
                                        $pdostmt=$con->query($stmt);
                                        $table=$pdostmt->fetchAll(PDO::FETCH_NUM);
                                        
                                        foreach($table as $row){
                                            echo "<option value=$row[0]>$row[1]</option>";
                                        }
                                    }
                                    catch(PDOException $ex){
                                        
                                    }
                                    ?>

								</select>

                            </div>
                                <button class="register-button" type="submit" name="reg">Confirm</button>
								
						
				</form>
				
					
				</article>
			</div>
		</section>
			
		<p><b><a href="admin.php">BACK</a></b></p>	
				                   
		 <footer>
			<p> Emergency Care Assistant, Copyright &copy; 2018 </p>
		</footer>


        

        <style>
        	button{
		      margin-left: 50px;
		      margin-top:25px;
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