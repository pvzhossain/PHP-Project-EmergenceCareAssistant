<?php
    session_start();

    
    $ADMIN_EMAIL = "";
    $ADMIN_PASSWORD = "";
    $errors = array(); 
    include('error.php');
    
    $db = mysqli_connect('localhost', 'pvz', '12345', 'project');   
    
if (isset($_POST['alogbutton'])) 
{
  
  $ADMIN_EMAIL = mysqli_real_escape_string($db, $_POST['ADMIN_EMAIL']);
  $ADMIN_PASSWORD = mysqli_real_escape_string($db, $_POST['ADMIN_PASSWORD']);
    
  if(empty($ADMIN_EMAIL) && empty($ADMIN_PASSWORD))
  {
      array_push($errors, "Error! Enter Email and Password");
  }
  else if (empty($ADMIN_EMAIL)) 
  {
    
    array_push($errors, "Email Address is required !");
  }
  else if (empty($ADMIN_PASSWORD)) 
  {
   
    array_push($errors, "Password is required !");
  }
  if (count($errors) == 0) 
  {
    
    //$ADMIN_PASSWORD = md5($ADMIN_PASSWORD);
    $query = "SELECT * FROM admin WHERE ADMIN_EMAIL='$ADMIN_EMAIL' AND ADMIN_PASSWORD='$ADMIN_PASSWORD'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) 
    {
      $_SESSION['ADMIN_EMAIL'] = $ADMIN_EMAIL;
      $_SESSION['success'] = "YES";
      header('location: admin.php');
    }
    else 
    {
        
        array_push($errors, "Wrong Email or Password !");
    }
      
  }
}

//if (isset($_POST['logbutton']))

?>
