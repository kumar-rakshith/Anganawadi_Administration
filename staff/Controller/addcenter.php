<?php
define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();

if(isset($_POST['add']))
{
	$sname=$_POST['name'];
	$phone=$_POST['date'];
	$location=$_POST['time'];
	$location=$_POST['address'];
	$location=$_POST['discription'];

	

	// $password=$_POST['password'];
	$stmt=$admin->cud("INSERT INTO `needyinfo`(`n_name`, `phone`, `location`) VALUES ('".$sname."','".$phone."','".$location."')","saved");

	echo "<script>alert('data saved');</script>";
	  $admin->redirect('../../addstories/victiminformation');
}

?>