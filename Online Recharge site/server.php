<?php
	$username = "";
	$email = "";
	$errors = "";
	// connect to database
	$db = mysqli_connect('localhost','root','123456789','recharge');
	
	if (isset($_POST['register'])) {
		$name = $_POST['name'];
		$username = $_POST['uname'];
		$password = ($_POST['psw']);
		$conf=($_POST['Password_2']);
		$wallet=($_POST['wallet']);
		$sql = "SELECT username FROM customer  where username = '$username'";
		$r=mysqli_query($db, $sql);

		if (mysqli_num_rows($r) > 0) {
			        echo "<script>alert('User Already Exist. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=temp.html");
		}
	    else if($password==$conf)
		{
			$sql = "INSERT INTO customer (username,email,password,wallet) VALUES ('$username', '$email', '$password','$wallet')";
			$r=mysqli_query($db, $sql);
			session_start();
			$_SESSION["username"] = "$username";
			header("Location:gse.php");
		}
		else
		{
			echo "<script>alert('Passwords must be same. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=temp.html");
		}
}	
?>
