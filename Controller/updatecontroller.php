<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();
if (isset($_POST['update']))
{
	echo "hello";
	  $id=$_POST['id'];		     
     $uname=$_POST['name'];
     $email=$_POST['email'];
     $dob=$_POST['dob'];
     $place=$_POST['place'];
     $phone=$_POST['phone'];
     $gender=$_POST['gender'];
     $password=$_POST['password'];

     $stmt = $admin->cud("UPDATE `register` SET `name`='".$uname."',`email`='".$email."',`phone`='".$phone."',`dob`='".$dob."',`phone`='".$phone."',`place`='".$place."',`gender`='".$gender."',`password`='".$password."' WHERE id=".$id,"updated");

         echo "<script>alert('data updated successfully');</script>";
         $admin->redirect('../display');
	


	// $update) 
	
}
?>