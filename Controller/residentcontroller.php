<?php
define('DIR','../');
require_once DIR .'config.php';
$contol = new Controller();

$resident = new Resident();
$admin = new Admin();

if (isset($_POST['add'])) 
{
  
   
  $email = $_POST['email'];  
  $password = $_POST['password']; 

  $res=$resident->loginResident($email,$password);

  if($res){
     $_SESSION['success_message'] = "Logged Successfully!!!";
     $resident->redirect('../Resident/index');
  }else{
    $_SESSION['error_message'] = "Invalid Login !!!";
      $resident->redirect('../residentLogin');
  }
}



// if (isset($_POST['add'])) 
// {
  
   
//   $email = $_POST['email'];  
//   $password = $_POST['password']; 

  
//   $stmt=$admin->ret("SELECT email, password FROM `resident`where email='$email'and password='$password'");
//   $row=$stmt->fetch(PDO::FETCH_ASSOC);  
  
//   $num=$stmt->rowCount();
//   if($num>0){
    

//     $admin->redirect('../resident/index');
// }
//  else
//    {
//      echo"please check your username and password";
//    }
//   }

// if (isset($_POST['forgot'])) 
// {
// $username = $_POST['email'];
// $stmt=$admin->ret("SELECT r_id FROM `resident` where email='$username'");
//   $row=$stmt->fetch(PDO::FETCH_ASSOC); 
//   $num=$stmt->rowCount(); 
//   $id= $row['r_id'];
//   echo "$id";
//   if($num>0)
//   {
// $admin->redirect1("../forgotresident.php?id=".$id);          //echo "<script>alert('Please check user name and password');window.location='../forgot.php';</script>";   
//   }
//   else{
//     echo "<script>alert('Please check user name ');window.location='../login.php';</script>";
    
//   } 
// }





if (isset($_POST['submit'])) 
{
  
   
  $email = $_POST['email'];  
  $password = $_POST['phone']; 

  
  $stmt=$admin->ret("SELECT * FROM `resident`where email='$email'and phone='$password'");
  $row=$stmt->fetch(PDO::FETCH_ASSOC);  
  
  $num=$stmt->rowCount();
   $id= $row['r_id'];
  echo "$id";
  if($num>0)
  {
$admin->redirect1("../resetresident.php?id=".$id);          //echo "<script>alert('Please check user name and password');window.location='../forgot.php';</script>";   
  }
  else{
    echo "<script>alert('Please check user name ');window.location='../login.php';</script>";
    
  } 
}



if (isset($_POST['login']))
{
    # code...
    $id=$_POST['r_id'];
    $password=$_POST['password'];
    $stmt =$admin->cud("UPDATE `resident` SET `password`='".$password."' WHERE r_id=".$id,"update");

         echo "<script>alert('Updated Record');window.location='../Resident/index.php';</script>";
         
    

    // $update) 
    
}
 

?>