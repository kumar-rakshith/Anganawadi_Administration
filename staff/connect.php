<?php 
	$host='localhost';
	$username="root";
	$pwd="";

	$dbname="anganawadi";
	$con=mysqli_connect($host,$username,$pwd);
    mysqli_select_db($con,$dbname);
  if (!$con) {
    die("Connection failed: " . mysqli_connect_error($con));
  }


?>
