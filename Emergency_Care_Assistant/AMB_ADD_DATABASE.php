<!DOCTYPE html>
<html>
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
if (isset($_POST['AMB'])) {
	

  // receive all input values from the form
$AMBULENCE_TYPE =$_POST['AMBULENCE_TYPE'];
$LICENCE_NUMBER =$_POST['LICENCE_NUMBER'];
 $AREA_ID=$_POST['AREA_ID'];

  	$query = "INSERT INTO ambulence (AMBULENCE_TYPE,LICENCE_NUMBER,AREA_ID) 
  			  VALUES('$AMBULENCE_TYPE', '$LICENCE_NUMBER','$AREA_ID')";
    $result = $conn->query($query);
	echo "Ambulence Added Successfully!";
  }

?>
        <!--<form class="amblist" action="Driver_ADD.php" method="POST">
	   		<button class="button-9" type="submit" name="add">ADD DRIVER</button>
	   </form>-->

        <p><b><a href="seeAmbulence.php">BACK</a></b></p>

</html>