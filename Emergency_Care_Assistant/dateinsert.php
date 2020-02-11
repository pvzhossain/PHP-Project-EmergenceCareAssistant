<?php session_start(); ?>
<!DOCTYPE html>
<html>
<body>
	
	<style>
		p{
			margin-bottom: 10px;
			text-align: center;
			color: #A8938D;
		}
		button{
	    margin-top:10px;
	    margin-left:600px;
	    width: 120px;
	    height: 32px;
	    background: #21C040;
	    border: none;
	    border-radius: 20px;
	    color: #fff;
	    transition: 0.2s ease;
	    cursor: pointer;
	  }
	</style>

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


$mail=$_SESSION['USER_EMAIL'];

$sql3 = mysqli_query($conn,"SELECT USER_NAME FROM user  WHERE USER_EMAIL='$mail'");
$USER_NAME=mysqli_fetch_assoc($sql3);
$uname=$USER_NAME['USER_NAME'];

$sql2 = mysqli_query($conn,"SELECT USER_ID FROM user  WHERE USER_EMAIL='$mail'");
$USER_ID=mysqli_fetch_assoc($sql2);
$uid=$USER_ID['USER_ID'];
  
if(isset($_POST['confirm']))
{
$date =$_SESSION['date'];
$ambid = $_SESSION['ambid'];

$sql = "INSERT INTO reserve (RESERVE_DATE, AMBULENCE_ID, USER_ID) values ('$date', '$ambid', '$uid')";

$result = $conn->query($sql);

}

?>

	<p><b>Congratulation <?php echo $uname; ?> !!</b></p>
	<p>Ambulance Reservation Successful</p>
	<p>Thank You For Being With Us</p>
	<form class="amblist" action="user.php" method="POST">
	  <button class="backhome" type="submit" name="backbtn">Back to Home</button>
	</form>
</body>
</html>
