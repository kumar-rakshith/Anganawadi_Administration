<?php
define('DIR','../');
require_once DIR .'config.php';
$contol = new Controller();

$admin = new Admin();

if (isset($_POST['submit'])) 
{
  
   
  $email = $_POST['email'];  
  $password = $_POST['password']; 

  
  $stmt=$admin->ret("SELECT email, password FROM `resident`where email='$email'and password='$password'");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);  
  
  $num=$stmt->rowCount();
  if($num>0){
    
echo "hi";
    //$admin->redirect('../index.php');
}
 else
   {
     echo"please check your username and password";
   }
  }

?>