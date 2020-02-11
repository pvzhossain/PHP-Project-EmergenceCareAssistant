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
						<li><a href="about.php">About</a></li>
						<li class="current"><a href="doctor.php">Emergency Doctor</a></li>
						<!--<li><a href="emramb.php">Emergency Ambulance</a></li>-->
						<li><a href="reserve.php">Reserve Ambulance</a></li>
						<li><a href="feedback.php">Give us Feedback</a></li>
						<!--<li><a href="register.php">Register</a></li>
						<li><a href="login.php">Login</a></li>-->
					</ul>
				</nav>
			</div>
		</header>

		<section id="reserve">
			<div class="container">
				<article id="main-colamblist">
					<h1 class="page-title">Emergency Doctor</h1>
					<form class="amblist" action="drpost.php" method="POST" enctype="multipart/form-data">
						<div class="location2">
							<div>
								<select id="dist" name="district2" onchange="readothervalues();">
                                    <option value="-1" selected>Select District</option>
									<?php
                                    try{
                                    $con=new PDO("mysql:host=localhost;dbname=project",'pvz','12345');
                                    	$stmt="select * from district";
                                        
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

								<?php 
									
								if(isset($_GET['dist'])){$district=$_GET['dist']; echo "<script>document.getElementById('dist').value='$district';</script>";}
                                     ?>

							</div>
							<div>
								<select id="thana2" name="thana2" onchange="readothervalues();">
									<option value="-1" selected>Select Thana</option>

									<?php
                                    try{
                                    $con3=new PDO("mysql:host=localhost;dbname=project",'pvz','12345');
                                        $stmt3="select * from thana";
                                        if(isset($_GET['dist'])){
                                        	$tmpdist=$_GET['dist'];
                                        	$stmt3.=" where DISTRICT_ID=$tmpdist";
                                        }

                                        $pdostmt3=$con3->query($stmt3);
                                        $table3=$pdostmt3->fetchAll(PDO::FETCH_NUM);
                                        
                                        foreach($table3 as $row3){
                                            echo "<option value=$row3[0]>$row3[1]</option>";
                                        }
                                    }
                                    catch(PDOException $ex){
                                        
                                    }
                                    ?>

								</select>
								<?php 
									
								if(isset($_GET['thana'])){$thana=$_GET['thana']; echo "<script>document.getElementById('thana2').value='$thana';</script>";}
                                     ?>
							</div>
							<div>
								<select id="area2" name="area2" onchange="readothervalues();">
									<option value="-1" selected>Select Area</option>

									<?php
                                    try{
                                    $con3=new PDO("mysql:host=localhost;dbname=project",'pvz','12345');
                                        $stmt3="select * from area";
                                        if(isset($_GET['thana'])){
                                        	$tmpthana=$_GET['thana'];
                                        	$stmt3.=" where THANA_ID=$tmpthana";
                                        }
                                        $pdostmt3=$con3->query($stmt3);
                                        $table3=$pdostmt3->fetchAll(PDO::FETCH_NUM);
                                        
                                        foreach($table3 as $row3){
                                            echo "<option value=$row3[0]>$row3[1]</option>";
                                        }
                                    }
                                    catch(PDOException $ex){
                                        
                                    }
                                    ?>
								</select>
								<?php
								if(isset($_GET['area'])){
									$area=$_GET['area']; 
									echo "<script>document.getElementById('area2').value='$area';</script>";
								}
                                     ?>
							</div>
                            
						</div>
                        
                        <script>
                                function readothervalues(){
                                    var dist=document.getElementById('dist').value;
                                    var thana=document.getElementById('thana2').value;
                                    var area=document.getElementById('area2').value;
                                    window.location.assign("doctor.php?dist="+dist+"&&thana="+thana+"&&area="+area);
                                    
                                }
                                    
                        </script>
                        <div>
                        	<input type="file" name="image">
                        </div>
                        
                        

                        
						<button class="button-3" type="submit" name="dr">Show</button>
					</form>
					
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