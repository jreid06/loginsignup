<?php
	// this NEEDS TO BE AT THE TOP of the page before any output etc
	// echo "<strong>First Name: </strong>" . $_SESSION['fname'];
	// session_start();

    // connecting database connectfile to this file
    include('dbconnect.php');

    // saves our errors that occur
    $fnameerror = '';
    $lnameerror = '';
    $emailerror = '';
    $passworderror = '';
    $passwordConfirmError = '';
    $success = '';

    // checks if the button has been clicked
    if (isset($_POST['submit'])) {

        // store the values of all fields into variables
		// 1. mysqli_real_escape_string takes 2 parameters
			// - 1.1 is the db connection variable
			// - 1.2 is the value you want to send
        $firstname = mysqli_real_escape_string($connect, $_POST['fname']);
        $lastname = mysqli_real_escape_string($connect, $_POST['lname']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = $_POST['password'];
        $confirmpass = $_POST['confirmPass'];

		// returnUserName($firstname);

        if (strLen($firstname) < 3) {
            $fnameerror = 'First Name must be more than 3 characters!!';
		}
        elseif (strLen($lastname) < 3) {
            $lnameerror = 'Last Name must be more than 3 characters!!';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailerror = "Enter a valid email address";
        } elseif (strLen($password) < 8) {
            $passworderror = "Password must be more than 8 characters long!!";

        } elseif ($password !== $confirmpass) {

            $passwordConfirmError = 'Password does not match!!';
        } else {

            // encrypt our information
            $password = md5($password);

            // create a query to add to table
            $insertQuery = "INSERT INTO users(firstName, lastName, email, password) VALUES ('$firstname', '$lastname', '$email', '$password')";

            //run query to insert values into the database
            // 1. our connection variable. connects the database name
            // 2. our query variable
            mysqli_query($connect, $insertQuery);

            $success = "You are registered succesfully !!";
			// header('Location: http://localhost:3002/');
			echo $success . "<br>";
			echo "<a href='index.php'>Take me home</a>";


        }
    }

 ?>