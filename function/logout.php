<?php 
	session_start();
	$_SESSION['username'] = '';
	$_SESSION['name'] = '';
	session_unset();
	session_destroy();
	header("location:../view/index.php");
 ?>