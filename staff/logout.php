<?php

	define('DIR', '../');
	require_once DIR . 'config.php';

	$controller = new Controller();


	// $controller->logOut('qacademy', '../index');
	unset($_SESSION['staff']);
	$controller->redirect('../index');

?>