<?php

	include('dbconnect.php');
	include('functions.php');



	$success = '';
	$error = '';

	if (isset($_POST['submitLogin'])) {

		// get the login details of the user
		$email = mysqli_real_escape_string($connect, $_POST['loginEmail']);
		$password = mysqli_real_escape_string($connect, $_POST['passwordLogin']);

		//check if email exists in our database
		if (email_exists($email, $connect)) {
			$success = 'EMAIL FOUND';
			echo $success . "<br>";


			// get the correct password for the entered email address
				// **sidenote**: if 'password' was changed to all then retrievePassword would be an array of all fields in database
			$result = mysqli_query($connect, "SELECT password FROM users WHERE email='$email'");

			// returns only password field for correct email
			$retrievePassword = mysqli_fetch_assoc($result);

			if (md5($password) !== $retrievePassword['password']) {
				$error = 'Incorrect Password';
				echo $error . "<br>";
				echo "<a href='index.php'>Re-enter your password correctly</a>";
			}
			else {
				//login user

				$_SESSION['email'] = $email;
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
