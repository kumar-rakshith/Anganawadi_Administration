<?php

	define('DIR', '');
    require_once DIR . 'config.php';

	if (isset($_POST['sbtn'])) {

	    require('sms/textlocal.class.php');
      $textlocal = new Textlocal(false, false, '+1T86CwG4qA-BzXrIPvmwCfWD5UugqdAx49NM0xo0S');
      $numbers = array(7892072493);
      $sender = 'TXTLCL';
      $message = 'HI HELLO';

      try {
          $result = $textlocal->sendSms($numbers, $message, $sender);
          print_r($result);
      } catch (Exception $e) {
          echo $message;
          die('Error: ' . $e->getMessage());
      }

    }
?>