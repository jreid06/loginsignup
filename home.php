<?php
	include('dbconnect.php');
	include('functions.php');

	if (logged_in()) {
		echo "<h1>YOU ARE LOGGED IN</h1>";
	}
	else {
		echo "<h1>YOU ARE <strong>NOT</strong> LOGGED IN</h1>";
	}
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>HOME</title>
	</head>
	<body>

	</body>
</html>