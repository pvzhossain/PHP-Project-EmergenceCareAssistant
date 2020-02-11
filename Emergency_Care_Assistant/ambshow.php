<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
 <title>Table with database</title>
 <style>
 
 body{
 
 fornt-family :sans-serif;
 font-size:11pt;
 background-image: url(back11.jpg);
 
 
 }

  table {
   border-collapse: collapse;
   width: 100%;
   color: #588c7e;
   font-family: monospace;
   font-size: 25px;
   text-align: left;
    table align:center;
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

if (isset($_POST['reserve'])) {

$rdate=$_POST['rdate'];
$rtime=$_POST['rtime'];


//$sql = "SELECT e.AMBULENCE_ID,e.AMBULENCE_TYPE,e.LICENCE_NUMBER as CAR_NO ,a.AREA_NAME FROM ambulence e join reserve r on e.AMBULENCE_ID!=r.AMBULENCE_ID and 
//r.RESERVE_DATE != '$rdate' 
//join area a on e.AREA_ID=a.AREA_ID where e.area_id=".$_POST['area2'];

$sql = "SELECT a.AMBULENCE_ID,a.AMBULENCE_TYPE,a.LICENCE_NUMBER as CAR_NO,a.AREA_ID FROM ambulence AS a
WHERE a.AMBULENCE_ID NOT IN (SELECT r.AMBULENCE_ID FROM reserve AS r WHERE r.RESERVE_DATE='$rdate') and a.area_id=".$_POST['area2'];

//echo $sql;

$result = $conn->query($sql);

echo "<table border='1'>
  <tr>
  <h1>AVAILABLE AMBULENCE LIST</h1>
  <p><b>Reserve Date</b></p><input type=\"text\" readonly value=\"$rdate\">
  <P><b>Reserve Time</b></p><input type=\"text\" readonly value=\"$rtime\">
  </tr>
  <tr>
  <th>AMBULENCE_ID</th>
  <th>AMBULENCE_TYPE</th>
  <th>CAR_NO</th>
  <th>AREA_ID</th>
  <!--<th>Reserve Date</th>-->
  </tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>" . $row['AMBULENCE_ID'] . "</td>";
    echo "<td>" . $row['AMBULENCE_TYPE'] . "</td>";
    echo "<td>" . $row['CAR_NO'] . "</td>";
    echo "<td>" . $row['AREA_ID'] . "</td>";
   $amb_num=$row['AMBULENCE_ID'];
   echo "<td><a href='confirmdri.php?AMBULENCE_ID=$amb_num'>View Details</a></td>";
   //echo "<td><a href='confirmdri.php?id=".$row['CAR_NO']."'></a></td>";
   echo "</tr>";

} 
echo "</table>";
}

$_SESSION['date'] = $rdate;
$_SESSION['time'] = $rtime;

$conn->close();
?> 
                                    
	<p><b><a href="reserve.php">BACK</a></b></p>
  <style>
    
    input{
      text-align: center;
      border:none;
      margin-bottom: 10px;
      margin-left: 490px;
      margin-right: 20px;
      padding-left: 100px;
      color: #907F7A;


    }
    p{
      text-align: center;
      color: #907F7A;
    }
    h1{
      text-align: center;
      color: #907F7A;
    }
  </style>
							
</body>
</html>