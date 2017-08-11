<?php
	include('dbconnect.php');
	include('functions.php');

?>

<!DOCTYPE html>
<html>
		<head>
			<meta charset="utf-8">
			<title>HOME</title>

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


		<?php
			if (logged_in()) {

		?>

		<div class="container">
			<div class="controls">
				<h1>YOU ARE LOGGED IN AS <?php echo $_SESSION['name']; ?></h1>

				<a href="logout.php">
					<button class="btn btn-danger" type="button" name="logOut">Log Out</button>
				</a>
			</div>

		<?php
			}
			else if(!logged_in()){
				header("location: index.php");
			}
		 ?>
		</div>



	</body>
</html>

