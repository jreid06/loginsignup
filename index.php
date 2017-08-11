<?php

include('dbconnect.php');
include('functions.php');

if (logged_in()) {
	header("location: home.php");
	exit();
}

 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login & Signup</title>

		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

	    <meta name="description" content="">
	    <meta name="keywords" content="login">
	    <meta name="author" content="Jason Brandon Reid">

	    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	    <!-- <link href="https://fonts.googleapis.com/css?family=Quicksand|Raleway:400,600" rel="stylesheet"> -->
		<link href="https://fonts.googleapis.com/css?family=Cabin|Droid+Sans" rel="stylesheet">
	    <!-- Custom CSS -->
	    <link rel="stylesheet" href="css/hover-min.css">
	    <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/login.css">

	</head>
	<body>

		<div class="jumbotron">
			<div class="left-register">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="signup">
								<?php
                                    // if ($success) {
                                    //     echo "<p class='success_message animated fadeIn'>" . $success . "</p>";
                                    // }
                                 ?>
								<form class="homeSignupForm" method="post" action="createaccount.php" enctype="multipart/form-data">
									<label for="">First Name</label>
									<input class="homeInput" type="text" name="fname" value="" placeholder="First Name ..">
									<?php
                                        // if ($fnameerror) {
                                        //     echo "<p class='error_message animated fadeIn'>" . $fnameerror . "</p>";
                                        // }
                                    ?>

									<label>Last Name</label>
									<input class="homeInput" type="text" name="lname" value="" placeholder="Last Name ..">
									<?php
                                        // if ($lnameerror) {
                                        //     echo "<p class='error_message animated fadeIn'>" . $lnameerror . "</p>";
                                        // }
                                    ?>

									<label for="">Email</label>
									<input class="homeInput" type="text" name="email" value="" placeholder="Enter your email address">
									<?php
                                        // if ($emailerror) {
                                        //     echo "<p class='error_message animated fadeIn'>" . $emailerror . "</p>";
                                        // }
                                    ?>

									<label for="">Password</label>
									<input class="homeInput" type="password" name="password" value="" placeholder="Create a password">
									<?php
                                        // if ($passworderror) {
                                        //     echo "<p class='error_message animated fadeIn'>" . $passworderror . "</p>";
                                        // }
                                    ?>

									<label for="">Confirm Password</label>
									<input class="homeInput" type="password" name="confirmPass" value="" placeholder="Re-enter your password">
									<?php
                                        // if ($passwordConfirmError) {
                                        //     echo "<p class='error_message animated fadeIn'>" . $passwordConfirmError . "</p>";
                                        // }
                                    ?>

									<input class="btn btn-primary submitBtn" type="submit" name="submit" value=" Complete Registration">

								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="right-login">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="login">
								<form class="homeLoginForm" method="post" action="login.php" enctype="multipart/form-data">
									<label for="">Login</label>
									<input class="homeLoginInput" type="email" name="loginEmail" value="" placeholder="Enter your email address ..">
									<label>Password</label>
									<input class="homeLoginInput" type="password" name="passwordLogin" value="" placeholder="Last Name ..">

									<label for="">Keep me signed in</label>
									<input type="checkbox" name="staySigned" value="">

									<input class="btn btn-primary loginBtn" type="submit" name="submitLogin" value=" login">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>


		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	    <!--font awsome-->
	    <script src="https://use.fontawesome.com/7c0f3e2f67.js"></script>
	    <!-- <script src="js/velocity.js"></script> -->

	    <!-- Compiled and minified JavaScript -->
		<script src="js/main.js"></script>
	    <script src="js/velocity.js"></script>
	    <script src="js/wow.min.js"></script>
	    <script>
	      new WOW().init();
	    </script>

	</body>
</html>