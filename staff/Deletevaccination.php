<?php

define('DIR', '../');
	include('connect.php'); 
	require_once DIR . 'config.php';

$id=$_GET['v_id'];
$qry=mysqli_query($con,"delete from tbl_vaccination where v_id='$id'")or die(mysqli_error($con));

if ($qry == true) {
		$_SESSION['success_message'] = "The record has been deleted successfully.";
	}else{
		$_SESSION['error_message'] = "Sorry, record not deleted!!!!!!!!!!";
	}
	
	echo '<script>
	window.location="Viewvaccination.php";
	</script>';
	// }

?>
	