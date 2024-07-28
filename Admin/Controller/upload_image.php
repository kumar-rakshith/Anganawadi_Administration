<?php
	define('DIR','../../');
	include('../connect.php'); 
	require_once DIR.'config.php';

	$control=new Controller();
	$admin=new Admin();
	$id = $_SESSION['admin'];

	//Upload Image
    $file = $_FILES['image']['name'];
    $file_loc = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $imgtype = $_FILES['image']['type'];
    $folder="../../assets/img/";
    $new_size = $file_size/2048;  
    $new_file_name = strtolower($file);
    $final_file=str_replace(' ','-',$new_file_name);
    if($imgtype != "image/jpg" && $imgtype != "image/png" && $imgtype != "image/jpeg" ) {
        echo "<script>alert('File type is not compatible');
      	</script>";
    }
    else {
         if(move_uploaded_file($file_loc,$folder.$final_file))
         {    

            // $ufname=$_POST['fname'];
            // $ulname=$_POST['lname'];
            // $ugender=$_POST['r1'];

            // $ucontact=$_POST['contact'];
            // $email=$_POST['email'];
   
            // $uadd=$_POST['address'];

	     
	        $qry=mysqli_query($con,"UPDATE `tbl_admin`  SET `image`='$final_file' WHERE `id`='$id' ")or die(mysqli_error($con));

	        if ($qry == true) {
				$_SESSION['success_message'] = "Profile photo changed successfully.";
			}else{
				$_SESSION['error_message'] = "Sorry, not uploaded!!!!!!!!!!";
			}

			$admin->redirect('../adminprofile');

      	}
    }
	  
?>