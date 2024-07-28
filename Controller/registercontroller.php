<?php
define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();


if(isset($_POST['add']))
{
	
	$name=$_POST['r_name'];
	$lname=$_POST['last_name'];

	$dob=$_POST['dob'];
	$gender=$_POST['gender'];
	
	$address=$_POST['address'];
	$target_dir="../uploads/";
	$image=$target_dir.basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], basename($_FILES["image"]["name"]));
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	$stmt=$admin->cud("INSERT INTO `resident`(`r_name`,`last_name`, `dob`,`gender`, `address`, `phone`, `image`,`email`, `password`) VALUES ('".$name."','".$lname."','".$dob."','".$gender."','".$address."','".$phone."','".$image."','".$email."','".$password."')","saved");

	echo "<script>alert('data saved')</script>";
	    $admin->redirect('../residentlogin');

}

?>