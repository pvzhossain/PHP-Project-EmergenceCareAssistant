<?php session_start(); ?>
<!DOCTYPE html>
<html>
<!--<head>
		<title> ECA </title>
		<link rel="stylesheet" type="text/css"
		href="ECA.css">
	</head>-->

 <title>DOCTOR</title>
 <style>
  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
  tr:nth-child(even) {background-color: #f2f2f2}
 </style>
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

//if (isset($_POST['dr'])) {
  

$aaid = $_GET['AREA_ID'];
$pid = $_GET['POST_ID'];

/*$pid = $_GET['POST_ID'];
echo $pid;*/

/*$sql = "SELECT d.DOCTOR_ID,d.DOCTOR_NAME,d.DOCTOR_PHONE_NUMBER,a.AREA_NAME FROM doctor d join area a on d.AREA_ID=
 a.AREA_ID and d.area_id=".$_POST['area2'];*/

$sql = "SELECT d.DOCTOR_ID,d.DOCTOR_NAME,d.DOCTOR_PHONE_NUMBER,a.AREA_NAME FROM doctor d join area a on d.AREA_ID=
a.AREA_ID and d.area_id=".$aaid;
$result = $conn->query($sql);
echo "<table border='1'> 
<tr>
<h1>DOCTOR  LIST </h1>
<!--<p><b>Call Any Doctor Via Doctor Phone Number</b></p>-->
</tr>
<tr>
<th>DOCTOR_ID</th>
<th>DOCTOR_NAME</th>
<th>DOCTOR_PHONE_NUMBER</th>
<th>AREA_NAME</th>


</tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['DOCTOR_ID'] . "</td>";
    echo "<td>" . $row['DOCTOR_NAME'] . "</td>";
    echo "<td>" . $row['DOCTOR_PHONE_NUMBER'] . "</td>";
    echo "<td>" . $row['AREA_NAME'] . "</td>";

    $doc_id = $row['DOCTOR_ID'];

 //echo "<td><button type='submit' name='sbtn'>Confirm</button></td>";
 echo "<td><a href='docassign.php?DOCTOR_ID=$doc_id&POST_ID=$pid'>Assign Doctor</a></td>";
 //echo "<td><a href='doctor.php?id=".$row['DOCTOR_ID']."'>CONFIRM</a></td>";
 	echo "</tr>";

} 
echo "</table>";
  
//}

$conn->close();
?> 
<p><b><a href="seepost.php">BACK</a></b></p>
<style>
  p
  {
    
    color: #907F7A;
  }
  h1{
      text-align: center;
      color: #907F7A;
    }
</style>
</body>
</html>






