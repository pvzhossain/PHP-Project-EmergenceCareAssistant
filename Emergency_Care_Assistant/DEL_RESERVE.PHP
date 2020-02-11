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

if (isset($_POST['de'])) {

	$RESERVE_ID = $_POST['RESERVE_ID'];
	echo "Reservation ID: ".$RESERVE_ID."<br/>";
	echo "Remove Successfully !";
  	$query = "DELETE from reserve WHERE RESERVE_ID=$RESERVE_ID";

   $result = $conn->query($query);
  
}
?>
                 <p><b><a href="admin.php">BACK</a></b></p>