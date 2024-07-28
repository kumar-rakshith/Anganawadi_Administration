<?php

	define('DIR', '../');
	include('connect.php'); 
	require_once DIR . 'config.php';

	$id=$_GET['sid'];
	$qry=mysqli_query($con,"delete from tbl_staff where staff_id='$id'")or die(mysqli_error($con));

	if ($qry == true) {
		$_SESSION['success_message'] = "The record has been deleted successfully.";
	}else{
		$_SESSION['error_message'] = "Sorry, record not deleted!!!!!!!!!!";
	}
	// if($qry)
	// {
	// 	// echo '<script>
	// 	// 	alert("Staff deleted successfully!!"); window.location="ViewStaff.php";
	// 	// 	</script>';
	// 	echo '<script>
	// 		window.location="ViewStaff.php";
	// 		</script>';
	// }
	// else
	// {
	// 		// echo '<script>
	// 		// alert("Failed to delete a staff"); window.location="ViewStaff.php";
	// 		// </script>';

	echo '<script>
	window.location="ViewStaff.php";
	</script>';
	// }

?>