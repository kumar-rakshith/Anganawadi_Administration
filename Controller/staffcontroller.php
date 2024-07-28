<?php

define('DIR','../');
require_once DIR .'config.php';
$contol = new Controller();

$staff = new Staff();

if (isset($_POST['add'])) 
{
  
  $email = $_POST['email'];  
  $password = $_POST['password']; 

  $res=$staff->loginStaff($email,$password);

  if($res){
     $_SESSION['success_message'] = "Logged Successfully!!!";
     $staff->redirect('../Staff/index');
  }else{
    $_SESSION['error_message'] = "Invalid Login !!!";
      $staff->redirect('../staffLogin');
  }
}

?>