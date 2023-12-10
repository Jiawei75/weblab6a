<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="hawaiian-shirt.png" type="image/png" />
	<title>
		H.Spot | Login 
	</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<a href="#"><img src="logo.png" class="logo" alt=""></a>
		<h2 style="text-align: center">Login Here!</h2>
	</div><br>
	
	<form method="post" action="login.php">

		<?php include('error.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password">
		</div>
		<div>
			<label>
			&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked" name="remember"> &nbsp;Remember me ?
			</label>
		</div>
		<br>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">
				Login
			</button>
		</div>

		<p>&nbsp;&nbsp;&nbsp;New Here? 
			<a href="register.php">Click here to register!</a>
		</p>
	</form>
</body>

</html>
