<?php
define('DIR', '../');
require_once DIR . 'config.php';
$control = new Controller(); 
$admin = new Admin();
if (isset($_POST['update']))
{
	// echo "hello";
	  $id=$_POST['atid'];		     
     $date=$_POST['date'];
     $rollno=$_POST['roll no'];
     $name=$_POST['name'];
     $attendance=$_POST['attendance'];
     // $phone=$_POST['phone'];
     // $gender=$_POST['gender'];
     // $password=$_POST['password'];

      

     $stmt = $admin->cud("UPDATE `tbl_attendance` SET `date`='".$date."',`rollno`='".$rollno."',`name`='".$name."',`attendance`='".$attendance."' WHERE atid=".$atid,"updated");

         echo "<script>alert('data updated successfully');</script>";
         $admin->redirect('../ViewAttendance');
	


	// $update) 
	
}
?>