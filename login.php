<?php

	include('dbconnect.php');
	include('functions.php');


	$success = '';
	$error = '';

	if (isset($_POST['submitLogin'])) {

		// get the login details of the user
		$email = mysqli_real_escape_string($connect, $_POST['loginEmail']);
		$password = mysqli_real_escape_string($connect, $_POST['passwordLogin']);
		$signedIn = isset($_POST['staySigned']);

		//check if email exists in our database
		if (email_exists($email, $connect)) {
			$success = 'EMAIL FOUND';
			echo $success . "<br>";

			// get the correct password for the entered email address
				// **sidenote**: if 'password' was changed to all then retrievePassword would be an array of all fields in database
			$result = mysqli_query($connect, "SELECT password FROM users WHERE email='$email'");
			$userName = mysqli_query($connect, "SELECT firstName FROM users WHERE email='$email'");
			// returns only password field for correct email
			$retrievePassword = mysqli_fetch_assoc($result);
			$retrieveName = mysqli_fetch_assoc($userName);

			// if password is Incorrect run code below
			if (md5($password) !== $retrievePassword['password']) {
				$error = 'Incorrect Password';
				echo $error . "<br>";
				echo "<a href='index.php'>Re-enter your password correctly</a>";
			}
			else {
				//login user else statement

				$_SESSION['email'] = $email;
				$_SESSION['name'] = $retrieveName['firstName'];

				// create the cookie when user is logged in
				// this only runs if checkbox is clicked.

				if ($signedIn == "on") {
					// 1. id 2. variable value 3, time value
					// the cookie will be set for 1 hour
					setcookie("email", $email, time() + 3600);
				}

				// user is then redirected to their dashboard
				header("location: home.php");

				// $success = 'Password is correct';
				// echo $success . "<br>";
				// echo "<a href='index.php'>Take me home</a>";
			}



		}
		else {
			$error = "EMAIL NOT FOUND" . "<br>";
			echo $error;
			echo "<a href='index.php'>Create an account</a>";
		}

	}
