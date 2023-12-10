<?php

// Starting the session, to use and, {use as profile}
// store data in session variable
session_start();

// If the session variable is empty, this 
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="hawaiian-shirt.png" type="image/png" />	
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>H.Spot | Homepage</title>
</head>
<body>
	<div class="header">
	<a href="#"><img src="logo.png" class="logo" alt=""></a>
		<h2 style="text-align: center">Home Page</h2>
	</div>
	<div class="content">

		<!-- Creating notification when the
				user logs in -->
		
		<!-- Accessible only to the users that
				have logged in already -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- information of the user logged in -->
		<!-- welcome message for the logged in user -->
		<?php if (isset($_SESSION['username'])) : ?>

    <p style="text-align: center"> Welcome 
        <strong>
            <?php echo $_SESSION['username']; ?>
        </strong>
    </p>

    <div class="input-group">
		<button type="normal" class="btn" name="login_user" style="background: red">
			<a href="login.php" style="text-decoration: none; color: white">Cancel</a>
		</button>

		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="normal" class="btn" name="login_user">
			<a href="../Assignment1/index.html" style="text-decoration: none; color: white;">Login</a>
		</button>

	</div>
		<?php endif ?>
	</div>
</body>
</html>
