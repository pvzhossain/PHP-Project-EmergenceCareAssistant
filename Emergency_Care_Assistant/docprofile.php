<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Doctor Profile</title>
	</head>
	<body>

		<p><b>Your Profile</b></p>
		<?php
		  	$host = "localhost";
			$dbUsername ="pvz";
			$dbPassword ="12345";
			$dbname="project";

		// create connection
			$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$mail=$_SESSION['DOCTOR_EMAIL'];
		//echo $mail;


		// Find USER_NAME
		$sql7 = mysqli_query($conn,"SELECT DOCTOR_NAME FROM doctor  WHERE DOCTOR_EMAIL='$mail'");
		$DOCTOR_NAME=mysqli_fetch_assoc($sql7);
		$dname=$DOCTOR_NAME['DOCTOR_NAME'];
		echo "Name: ".$dname."<br/>";

		// Find USER_ID
		$sql2 = mysqli_query($conn,"SELECT DOCTOR_ID FROM doctor  WHERE DOCTOR_EMAIL='$mail'");
		$DOCTOR_ID=mysqli_fetch_assoc($sql2);
		$did=$DOCTOR_ID['DOCTOR_ID'];
		echo "Id No: ".$did."<br/>";

		//Find EMAIL
		echo "Email Address: ".$mail."<br/>";

		//Find PPHONE_NUMBER
		$sql8 = mysqli_query($conn,"SELECT DOCTOR_PHONE_NUMBER FROM doctor  WHERE DOCTOR_EMAIL='$mail'");
		$DOCTOR_PHONE_NUMBER=mysqli_fetch_assoc($sql8);
		$dphone=$DOCTOR_PHONE_NUMBER['DOCTOR_PHONE_NUMBER'];
		echo "Phone Number: ".$dphone."<br/>";


		// Find AREA_ID
		$sql3 = mysqli_query($conn,"SELECT AREA_ID FROM doctor  WHERE DOCTOR_EMAIL='$mail' ");
		$AREA_ID=mysqli_fetch_assoc($sql3);
		$aid=$AREA_ID['AREA_ID'];

		// Find AREA_NAME
		$sql1 = mysqli_query($conn,"SELECT AREA_NAME FROM area  WHERE AREA_ID='$aid' ");
		$AREA_NAME=mysqli_fetch_assoc($sql1);
		$aname=$AREA_NAME['AREA_NAME'];
		echo "Area Name: ".$aname."<br/>";
		
?>

	<form class="drcon" action="doctorpage.php" method="POST">
  		<button class="drpost" type="submit" name="dpost">Back To Home</button>
	</form>


	<style>
		p{
			
			color: red;
		}
		button{
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


	</body>
</html>


