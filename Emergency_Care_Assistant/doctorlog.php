<?php
    session_start();

    
    $DOCTOR_EMAIL = "";
    $DOCTOR_PASSWORD = "";
    $errors = array(); 
    include('error.php');
    
    $db = mysqli_connect('localhost', 'pvz', '12345', 'project');   
    
if (isset($_POST['dlogbutton'])) 
{
  
  $DOCTOR_EMAIL = mysqli_real_escape_string($db, $_POST['DOCTOR_EMAIL']);
  $DOCTOR_PASSWORD = mysqli_real_escape_string($db, $_POST['DOCTOR_PASSWORD']);
    
  if(empty($DOCTOR_EMAIL) && empty($DOCTOR_PASSWORD))
  {
      array_push($errors, "Error! Enter Email and Password");
  }
  else if (empty($DOCTOR_EMAIL)) 
  {
    
    array_push($errors, "Email Address is required !");
  }
  else if (empty($DOCTOR_PASSWORD)) 
  {
   
    array_push($errors, "Password is required !");
  }
  if (count($errors) == 0) 
  {
    
    //$ADMIN_PASSWORD = md5($ADMIN_PASSWORD);
    $query = "SELECT * FROM doctor WHERE DOCTOR_EMAIL='$DOCTOR_EMAIL' AND DOCTOR_PASSWORD='$DOCTOR_PASSWORD'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) 
    {
      $_SESSION['DOCTOR_EMAIL'] = $DOCTOR_EMAIL;
      $_SESSION['success'] = "YES";
      header('location: doctorpage.php');
    }
    else 
    {
        
        array_push($errors, "Wrong Email or Password !");
    }
      
  }
}

//if (isset($_POST['logbutton']))

?>
