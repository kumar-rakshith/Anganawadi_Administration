<?php
require('textlocal.class.php');

$textlocal = new Textlocal('vinuthashettigar1999@textlocal.com', 'VinuRakku1@2');

$numbers = array(9480902491);
$sender = 'Textlocal';
$message = 'This is a message';

try {
    $result = $textlocal->sendSms($numbers, $message, $sender);
    print_r($result);
} catch (Exception $e) {
    die('Error: ' . $e->getMessage());
}
?>