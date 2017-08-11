<?php

	// localhost connection; server username; password; databaseName
	$connect = mysqli_connect("createaccount.app","root", "root", "registration");

	// checks if the connection is not succesful
	if (mysqli_connect_errno()) {
		echo "Error connecting to database" . mysqli_connect_errno();
	}

	session_start();

 ?>