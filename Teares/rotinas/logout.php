<?php
	session_start();
	if(isset($_SESSION['user']) and isset($_SESSION['password'])) {
		unset($_SESSION['user']);
		unset($_SESSION['password']);
	}
	header("location:..\login.php");

?>