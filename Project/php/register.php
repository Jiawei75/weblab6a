<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="hawaiian-shirt.png" type="image/png" />
	<title>
		H.Spot | Registration
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
	<a href="#"><img src="logo.png" class="logo" alt="" ></a>
		<h2 style="text-align: center">Registration</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('error.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username"
				value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email"
				value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div>
			<label>
			&nbsp;&nbsp;&nbsp;<input type="checkbox" checked="checked" name="remember"> &nbsp;I agree with Terms & Conditions
			</label>
		</div>
		<br>
		<div class="input-group" >
			<button type="submit" class="btn" name="reg_user">
				Register
			</button>
		</div>
		<p>
			Already having an account?
			<a href="login.php">
				Login Here!
			</a>
		</p>

	</form>
</body>
</html>
