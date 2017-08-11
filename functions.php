<?php

	// function to check if email exsits in database
	function email_exists($email, $connection){
		// variable that stores our query. This checks if the email exists by selecting the ID of the emailfield = $email variable
		$result = mysqli_query($connection,"SELECT id FROM users WHERE email='$email'");

		// check how many rows equal to our query
		if (mysqli_num_rows($result) === 1) {
			return true;
		}
		else {
			return false;
		}
	}

	//function to check if suer is logged in

	function logged_in(){

		// if user is logged in return value
		if (isset($_SESSION['email'])) {
			return true;
		}
		else {
			return false;
		}
	}

 ?>