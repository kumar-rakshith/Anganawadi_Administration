<?php
/**
 * Created by MVV.
 * User: Vishwas
 * Date: 11 Apr 2019
 * Time: 20:55
 */
    define('DIR', '../');
    require_once DIR . 'config.php';

    $control = new Controller(); 

    $id = $_SESSION['users_id'];
    unset($_SESSION['users_id']);
    $password = $_POST['password'];

    // if (isset($_POST['cng_pswd'])) {

    //     $res = $control->update_password($id,$password);
    //     if ($res == true) {
    //     	$res = $control->reset_otp($id);
    // 		$_SESSION['success_message'] = "Successfully Updated Password";
    // 	}else{
    // 		$_SESSION['error_message'] = "Sorry An Error Occured";
    // 	}

    // }
    if (isset($_POST['cng_pswd_res'])) {

        $res = $control->update_password_resident($id,$password);
        if ($res == true) {
            $res = $control->reset_otp_resident($id);
            $_SESSION['success_message'] = "Successfully Updated Password";
        }else{
            $_SESSION['error_message'] = "Sorry An Error Occured";
        }
        $control->redirect('../residentLogin');
    }

	if (isset($_POST['cng_pswd_admin'])) {

        $res = $control->update_password_admin($id,$password);
        if ($res == true) {
            $res = $control->reset_otp_admin($id);
            $_SESSION['success_message'] = "Successfully Updated Password";
        }else{
            $_SESSION['error_message'] = "Sorry An Error Occured";
        }
        $control->redirect('../adminLogin');
    }

    if (isset($_POST['cng_pswd_staff'])) {

        $res = $control->update_password_staff($id,$password);
        if ($res == true) {
            $res = $control->reset_otp_staff($id);
            $_SESSION['success_message'] = "Successfully Updated Password";
        }else{
            $_SESSION['error_message'] = "Sorry An Error Occured";
        }
        $control->redirect('../staffLogin');
    }
?>