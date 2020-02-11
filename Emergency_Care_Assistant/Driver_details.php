<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
		<title> ECA </title>
		<link rel="stylesheet" type="text/css"
		href="ECA.css">
	</head>

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



$AMBULENCE_ID = $_GET['AMBULENCE_ID'];
$s =  "SELECT e.AMBULENCE_ID,e.LICENCE_NUMBER ,d.DRIVER_ID,d.DRIVER_NAME ,d.DRIVER_PHONE_NUMBER,d.DRIVER_EMAIL
FROM ambulence e join driver d on e.AMBULENCE_ID=d.AMBULENCE_ID WHERE e.AMBULENCE_ID = $AMBULENCE_ID";
$result = $conn->query($s);
echo "<table border='1'>
<tr>

<th>AMBULENCE_ID</th>
<th>LICENCE_NUMBER</th>
<th>DRIVER_ID</th>
<th>DRIVER_NAME</th>
<th>DRIVER_PHONE_NUMBER</th>
<th>DRIVER_EMAIL</th>


</tr>";

//if ($result->num_rows > 0) {
    // output data of each row
 while($row = $result->fetch_assoc()) {

echo "<tr>";
echo "<td>".$row['AMBULENCE_ID'] . "</td>";
echo "<td>".$row['LICENCE_NUMBER'] . "</td>";
echo "<td>".$row['DRIVER_ID'] . "</td>";
echo "<td>".$row['DRIVER_NAME'] . "</td>";
echo "<td>".$row['DRIVER_PHONE_NUMBER'] . "</td>";
echo "<td>".$row['DRIVER_EMAIL'] . "</td>";


echo "</tr>";
}	  
echo "</table>";	  
$conn->close();
?>





<style>
  button
  {
    margin-bottom: 30px;
    margin-top: 20px;
    margin-left:600px;
    width: 180px;
    height: 32px;
    background: #907F7A;
    border: none;
    border-radius: 20px;
    color: #fff;
    transition: 0.2s ease;
    cursor: pointer;
  }
</style>

</body>
</html>

