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

	$AMBULENCE_ID = $_POST['AMBULENCE_ID'];
	
  	$query = "DELETE from AMBULENCE WHERE AMBULENCE_ID=$AMBULENCE_ID";

   $result = $conn->query($query);
   echo "Ambulence Remove Successfully!";
  
}
?>
    <p><b><a href="seeAmbulence.php">BACK</a></b></p>