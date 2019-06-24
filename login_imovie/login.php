<?php include('functions.php') ?>
<?php include('process.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<a class="btn"href="../home_page/imovies_home.html"><img src ="wAmp/www/home_page/img/imovie_home.jpg" alt="">HOME</a>
</head>
<body>
	<div class="header">
		<h2>Login to iMOVIES</h2>
		<p>(login using iMOVIES credentials)</p>
	</div>
	
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>