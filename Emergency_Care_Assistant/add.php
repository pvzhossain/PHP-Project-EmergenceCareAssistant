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
if (isset($_POST['adminre'])) {
 
  $USER_ID =$_POST['USER_ID'];
  echo $USER_ID;
  $AMBULENCE_ID = $_POST['AMBULENCE_ID'];
  echo $AMBULENCE_ID;
  $RESERVE_DATE =$_POST['rdate'];
  echo $RESERVE_DATE;
  //$RESERVE_TIME =$_POST['rtime'];


	$query = "INSERT INTO reserve (RESERVE_DATE,AMBULENCE_ID,USER_ID) 
			  VALUES('$RESERVE_DATE', $AMBULENCE_ID', '$USER_ID')";

$result = $conn->query($query);
  
}
?>
<p><b><a href="admin.php">BACK</a></b></p>