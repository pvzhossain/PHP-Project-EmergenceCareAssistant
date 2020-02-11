<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Profile</title>
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

		$mail=$_SESSION['ADMIN_EMAIL'];
		//echo $mail;


		// Find USER_NAME
		$sql7 = mysqli_query($conn,"SELECT ADMIN_NAME FROM admin  WHERE ADMIN_EMAIL='$mail'");
		$ADMIN_NAME=mysqli_fetch_assoc($sql7);
		$adname=$ADMIN_NAME['ADMIN_NAME'];
		echo "Name: ".$adname."<br/>";

		// Find USER_ID
		$sql2 = mysqli_query($conn,"SELECT ADMIN_ID FROM admin  WHERE ADMIN_EMAIL='$mail'");
		$ADMIN_ID=mysqli_fetch_assoc($sql2);
		$adid=$ADMIN_ID['ADMIN_ID'];
		echo "Id No: ".$adid."<br/>";

		//Find EMAIL
		echo "Email Address: ".$mail."<br/>";

		//Find PPHONE_NUMBER
		$sql8 = mysqli_query($conn,"SELECT ADMIN_PHONE_NUMBER FROM admin  WHERE ADMIN_EMAIL='$mail'");
		$ADMIN_PHONE_NUMBER=mysqli_fetch_assoc($sql8);
		$adphone=$ADMIN_PHONE_NUMBER['ADMIN_PHONE_NUMBER'];
		echo "Phone Number: ".$adphone."<br/>";

		
?>

	<form class="drcon" action="admin.php" method="POST">
  		<button class="drpost" type="submit" name="dpost">Back To Home</button>
	</form>


	<style>
		p{
			
			color: #907F7A;
		}
		button{
	    margin-top:20px;
	    width: 120px;
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


