<?php

include('connect.php'); 
$id=$_GET['sid'];
$qry=mysqli_query($con,"delete from tbl_staff where staff_id='$id'")or die(mysqli_error($con));
if($qry)
{
	echo '<script>
	alert("Staff deleted successfully!!"); window.location="staffview.php";
</script>';
}
else
{
	echo '<script>
	alert("Failed to delete a staff"); window.location="staffview.php";
</script>';
}
?>
