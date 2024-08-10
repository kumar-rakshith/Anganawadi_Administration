<?php
define('DIR','../../');
require_once DIR.'config.php';
$control=new Controller();
$admin=new Admin();
if(isset($_POST['add']))
{
	$no=$_POST['no'];
	for($i=0;$i<$no;$i++){
		$name=$_POST['child_id'.$i];

		$status=$_POST['status'.$i]; 

		$stmt=$admin->cud("INSERT INTO `tbl_attendance`(`child_id`,`status`,`date`) VALUES ('".$name."','".$status."',now())","saved");
	}

	echo "<script>alert('data saved');</script>";
	$admin->redirect('../viewAttendance');

}
?>
