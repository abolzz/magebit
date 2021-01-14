<?php
	include 'autoloader.php';
	if(isset($_POST['email'])) {
		$email = $_POST['email'];
		$testObj = new Test();
		$testObj->deleteEmail($email);
		header( "Location: table.php" );
	}
?>