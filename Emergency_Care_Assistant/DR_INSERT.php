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
if (isset($_POST['insert'])) {
	

  // receive all input values from the form
  $DOCTOR_ID = $_POST['DOCTOR_ID'];
 echo "A".$DOCTOR_ID;
//akhan a user id r post id get kore insert krba

  	$query = "INSERT INTO post (POST_ID,USER_ID,DOCTOR_ID) 
  			  VALUES('1','1','$DOCTOR_ID')";
    $result = $conn->query($query);
	echo "B" .$result;
	$sql_update = "UPDATE doctor SET IS_RESERVED = 'YES' where DOCTOR_ID= '$DOCTOR_ID'";

   $update_result = $conn->query($sql_update);
	
	//echo "DOCTOR ASSIGNED SUCCESSFULLY";
  }

?>
           <p><b><a href="seeDoctor.php">BACK</a></b></p>