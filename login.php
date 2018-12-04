<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="CSS/Style.css">
</head>
<body>

	<header>
			<div>
				<h1 id="mainT">Jack & Mick's Game Shop</h1>
			</div>
			<hr class="line">
			<div id="navcontainer">
				<ul>
					<li id="login"><a href="register.php">Register</a></li>
				</ul>
			</div>
			<hr class="line">
		</header>
	<div class="header">
		<h2>Login</h2>
	</div>

	<form method="post" action="login.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" name="login" class="btn">Login</button>
		</div>

		<p>
			Not a member? <a href="register.php">Sign Up</a>
		</p>
	</form>
</body>
</html>