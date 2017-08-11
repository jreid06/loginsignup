<?php
	// on this page we will logout the user from their account

	// destroy the sesssion.
	session_start();
	session_destroy();

	// unset the cookie when user has clicked logout button
	setcookie('email', '', time() - 3600);

	// redirect user to registration/login page
	header("location: index.php");

 ?>