<?php
	define('DIR','../../');
	include('../connect.php'); 
	require_once DIR.'config.php';

	$control=new Controller();
	$admin=new Admin();

	if(isset($_POST['add']))
	{
		$id = $_SESSION['admin'];

		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$address=$_POST['address'];

		$qry=mysqli_query($con,"UPDATE `tbl_admin` SET `A_name`='$name',`phone`='$phone',
	                  `email`='$email', `dob`='$dob', `address`='$address' WHERE `id`='$id'")or die(mysqli_error($con));

		if ($qry == true) {
			$_SESSION['success_message'] = "Profile updated successfully.";
		}else{
			$_SESSION['error_message'] = "Sorry, not updated!!!!!!!!!!";
		}

		$admin->redirect('../adminprofile');

	}

	if(isset($_POST['cng_pswd']))
	{
		$id = $_SESSION['admin'];
		$password=$_POST['password'];

		$qry=mysqli_query($con,"UPDATE `tbl_admin` SET `password`='$password' WHERE `id`='$id'")or die(mysqli_error($con));

		if ($qry == true) {
			$_SESSION['success_message'] = "Password changed successfully.";
		}else{
			$_SESSION['error_message'] = "Sorry, not updated!!!!!!!!!!";
		}

		$admin->redirect('../adminprofile');
	}

	if(isset($_POST['c_pswd'])) { 

		$id = $_SESSION['admin'];
	    $c_pswd = $_POST['c_pswd'];
	   
        $list = mysqli_query($con,"SELECT id FROM tbl_admin where password='".$c_pswd."'");
        $admin = mysqli_fetch_assoc($list);

        if($admin['id']==$id) 
        { 
            echo 'Correct';
        }

	}
?>
