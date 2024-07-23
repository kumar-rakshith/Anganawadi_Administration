<?php
define('DIR','../');
require_once DIR .'config.php';
$contol = new Controller();

$admin = new Admin();

if (isset($_POST['add'])) 
{
  
   
  $email = $_POST['email'];  
  $password = $_POST['password']; 

  $type = "admin";
  $res=$admin->loginAdmin($email,$password);

  if($res){
     $_SESSION['success_message'] = "Logged Successfully!!!";
     $admin->redirect('../Admin/index');
  }else{
    $_SESSION['error_message'] = "Invalid Login !!!";
      $admin->redirect('../adminLogin');
  }
}

?>