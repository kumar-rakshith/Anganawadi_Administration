<?php

include('connect.php'); 
$id=$_GET['atid'];
$qry=mysqli_query($con,"delete from tbl_attendance where atid='$id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
		alert("Deleted attendance details successfully!!"); window.location="ViewAttendance.php";
		</script>';
}
else
{
		echo '<script>
		alert("Failed"); window.location="ViewAttendance.php";
		</script>';
}

?>