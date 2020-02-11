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

	$DOCTOR_ID = $_POST['DOCTOR_ID'];
	
  	$query = "DELETE from doctor WHERE DOCTOR_ID=$DOCTOR_ID";

   $result = $conn->query($query);
   echo "Doctor Removed Successfully!";
  
}
?>
                 <p><b><a href="seeDoctor.php">BACK</a></b></p>