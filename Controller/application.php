<?php
define('DIR','../');
require_once DIR . 'config.php';

$control = new Controller(); 
$admin = new Admin();

if(isset($_POST['add']))
{
	
	$sid=$_POST['s_id'];
	$name=$_POST['name'];
	
	$pnumber=$_POST['pnumber'];
	$anumber=$_POST['anumber'];
	$rnumber=$_POST['rnumber'];
	
	$vid=$_POST['vid'];
	$caste=$_POST['caste'];
	$fname=$_POST['fname'];
	
	$stmt=$admin->cud("INSERT INTO `tbl_application`(`s_id`, `name`, `pnumber`, `anumber`,`rnumber`, `vid`,`caste`,`fname`) VALUES ('".$s_id."','".$name."','".$fname."','".$anumber."','".$rnumber."','".$vid."','".$caste."','".$pnumber."')","saved");

	echo "<script>alert('data saved')</script>";
	    $admin->redirect('../Resident/index');

}

?>
