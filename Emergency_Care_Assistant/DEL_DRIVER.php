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

if (isset($_POST['del'])) {

	$DRIVER_ID = $_POST['DRIVER_ID'];
	
  	$query = "DELETE from DRIVER WHERE DRIVER_ID=$DRIVER_ID";

   $result = $conn->query($query);
   echo " Driver DATA DELETED SUCCESSFULLY";
  
}
?>
<p><b><a href="seeDriver.php">BACK</a></b></p>