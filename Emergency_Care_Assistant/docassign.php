<?php
session_start();
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
//if (isset($_POST['adminre'])) {

  $did = $_GET['DOCTOR_ID'];
  //echo $did;
  $pid = $_GET['POST_ID'];
  //echo $pid;


	$query = "UPDATE post SET DOCTOR_ID='$did' where POST_ID='$pid' ";

$result = $conn->query($query);

echo "Doctor Assigned Successfully!"
  

?>
<p><b><a href="admin.php">BACK</a></b></p>