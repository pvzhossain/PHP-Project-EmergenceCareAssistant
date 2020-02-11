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
if (isset($_POST['DRVR'])) {
	

  // receive all input values from the form
  $DRIVER_NAME = $_POST['DRIVER_NAME'];
  $DRIVER_EMAIL = $_POST['DRIVER_EMAIL'];
  $DRIVER_PHONE_NUMBER = $_POST['DRIVER_PHONE_NUMBER'];
  $AMBULENCE_ID=$_POST['AMBULENCE_ID'];
//echo "A".$DRIVER_NAME ;
  	$query = "INSERT INTO driver (DRIVER_NAME,DRIVER_EMAIL, DRIVER_PHONE_NUMBER ,AMBULENCE_ID) 
  			  VALUES('$DRIVER_NAME', '$DRIVER_EMAIL', '$DRIVER_PHONE_NUMBER' ,'$AMBULENCE_ID')";
    $result = $conn->query($query);
	echo "Driver Added Successfully!";
  }

?>
<p><b><a href="seeDriver.php">BACK</a></b></p>