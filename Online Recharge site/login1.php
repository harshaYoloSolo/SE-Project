
<!DOCTYPE html>
<html>
<head><link rel="icon" type="image/gif/png" href="newlogo.png">
	<title>tutor</title>
	<link rel="stylesheet" type="text/css" href="tutssty.css">
</head>
<body background="back.jpg">
	<div class="header">
		<h2>Customer Login</h2>
	</div>
	<form method="post" action="allready.php">
		<div class="input-g">
			<label>Username:</label>
			<input type="text" name="username" required>
		</div>
		<div class="input-g">
			<label>Password</label>
			<input type="password" name="Password_1" required>
		</div>
		<div class="input-g">
			<button type="submit" name="login" class="btn">Login</button>
		</div>
		<p>
			 Not already member? <a href="temp.html">Sign Up</a>
			 <a style="float: right;" href="SE.php">Home</a>
		</p>
	</form>
</body>
</html>