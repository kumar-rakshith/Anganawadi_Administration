<?php 

	define('DIR','../');
	require_once DIR . 'config.php';

	$control = new Controller(); 
	$admin = new Admin();

	$conn = mysqli_connect (DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);

	if(isset($_POST['regemail'])) { //registration contact

	    $email = $_POST['regemail']; //escape the string
	   
        $list = mysqli_query($conn,"SELECT * FROM resident where email='".$email."'");
        $registration = mysqli_fetch_assoc($list);

        if($registration) 
        { 
            echo 'Email Exists';
        }

	}

	if(isset($_POST['phone'])) { //registration contact

	    $phone = $_POST['phone']; //escape the string
	   
        $list = mysqli_query($conn,"SELECT * FROM resident where phone='".$phone."'");
        $registration = mysqli_fetch_assoc($list);

        if($registration) 
        { 
            echo 'Phone Exists';
        }

	}


	//Staff
	if(isset($_POST['stfemail'])) { //registration contact

	    $email = $_POST['stfemail']; //escape the string
	   
        $list = mysqli_query($conn,"SELECT * FROM tbl_staff where email='".$email."'");
        $staff = mysqli_fetch_assoc($list);

        if($staff) 
        { 
            echo 'Email Exists';
        }

	}

	if(isset($_POST['stfcontact'])) { //registration contact

	    $contact = $_POST['stfcontact']; //escape the string
	   
        $list = mysqli_query($conn,"SELECT * FROM tbl_staff where contact='".$contact."'");
        $staff = mysqli_fetch_assoc($list);

        if($staff) 
        { 
            echo 'Phone Exists';
        }

	}

?>
