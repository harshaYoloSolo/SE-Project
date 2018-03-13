<!DOCTYPE html>
<html>
<head><link rel="icon" type="image/gif/png" href="newlogo.png">
	<title>tutor</title>
	<link rel="stylesheet" type="text/css" href="tutssty.css">
	<style>
    </style>
</head>
<body ng-app="mymodal">
	<div class="header">
		<h2>Service_Provider registration from</h2>
	</div>
	<form method="post" action="server1.php">
		    <div class="input-g">
			<label>Service Provider Name:</label>
			<input type="text" name="spn" required>
			</div>
			<div class="input-g">
			<label>Circle:</label>
			<input type="text" name="circle" required>
			</div>
			<div class="input-g">
			<label>Password:</label>
			<input type="password" name="Password_1">
			</div>
			<div class="input-g">
			<label>Confirm Password:</label>
			<input type="password" name="Password_2">
			</div>
			<button type="submit" name="register" class="btn">Register</button><br>
		<a style="float: right;" href="SE.php">Home</a>
		Allready a member?<a href="login.php">Sign In</a>
			
		</form>
</body>
</html>