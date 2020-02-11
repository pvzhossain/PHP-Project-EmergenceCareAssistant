<?php session_start(); ?>


<!DOCTYPE html>
<html>
	<head>
		<title>Confirm doctor</title>
	</head>
	<body>
		

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

		$mail=$_SESSION['USER_EMAIL'];

		// Find USER_ID
		$sql2 = mysqli_query($conn,"SELECT USER_ID FROM user  WHERE USER_EMAIL='$mail'");
		$USER_ID=mysqli_fetch_assoc($sql2);
		$uid=$USER_ID['USER_ID'];


		if (isset($_POST['dr'])){
			$image = $_FILES['image']['name'];
			$target = "images/".basename($image);
			
			

			$result = mysqli_query($conn,"SELECT IMAGE FROM post WHERE USER_ID='$uid' ");
			$row = mysqli_fetch_assoc($result);
			$imge = $row['IMAGE'];
			
			// Find AREA_ID
			$arid = $_POST['area2'];
			//echo $arid;

			$sql = "INSERT INTO post (IMAGE, USER_ID, AREA_ID) values ('$image', '$uid', '$arid')";
			mysqli_query($conn, $sql);


			echo "<p><b>Our doctor will contact with you very soon</b></p>
					<p>Thanks for being with us<p>";

			/*Find AREA_NAME
			$sql1 = mysqli_query($conn,"SELECT AREA_NAME FROM area  WHERE AREA_ID='$arid' ");
			$AREA_NAME=mysqli_fetch_assoc($sql1);
			$aname=$AREA_NAME['AREA_NAME'];
			echo "Area Name: ".$aname."<br/>";*/

			/*Find THANA_ID
			$sql3 = mysqli_query($conn,"SELECT THANA_ID FROM area  WHERE AREA_ID='$arid' ");
			$THANA_ID=mysqli_fetch_assoc($sql3);
			$tid=$THANA_ID['THANA_ID'];
			echo $tid;*/

			/*Find THANA_NAME
			$sql4 = mysqli_query($conn,"SELECT THANA_NAME FROM thana  WHERE THANA_ID='$tid' ");
			$THANA_NAME=mysqli_fetch_assoc($sql4);
			$tname=$THANA_NAME['THANA_NAME'];
			echo "Thana Name: ".$tname."<br/>";*/

			/*Find DISTRICT_ID
			$sql5 = mysqli_query($conn,"SELECT DISTRICT_ID FROM area  WHERE AREA_ID='$arid' ");
			$DISTRICT_ID=mysqli_fetch_assoc($sql5);
			$disid=$DISTRICT_ID['DISTRICT_ID'];
			echo $disid;*/

			/*Find DISTRICT_NAME
			$sql6 = mysqli_query($conn,"SELECT DISTRICT_NAME FROM district  WHERE DISTRICT_ID='$disid' ");
			$DISTRICT_NAME=mysqli_fetch_assoc($sql6);
			$disname=$DISTRICT_NAME['DISTRICT_NAME'];
			echo "District Name: ".$disname."<br/>";*/

			//echo "<img src='images/".$row['IMAGE']."' >"."<br/>";
		      
		    //echo "<img src='images/".$imge."' >";
		    }

	?>

	<form class="drcon" action="drpost.php" method="POST" enctype="multipart/form-data">
  		<button class="drpost" type="submit" name="dpost">See Your Post</button>
	</form>

	<style>
		p{
			text-align: center;
			color: red;
		}
		button{
	    margin-top:10px;
	    margin-left:600px;
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