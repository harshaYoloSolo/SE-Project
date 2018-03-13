<?php
	$username = "";
	$email = "";
	$errors = "";
	// connect to database
	$db = mysqli_connect('localhost','root','123456789','recharge');
	if (isset($_POST['register'])) {
		$name = $_POST['spn'];
		$username = $_POST['circle'];
		$password = ($_POST['Password_1']);
		$conf=($_POST['Password_2']);
		$sql = "SELECT username FROM student  where username = '$circle'";
		$r=mysqli_query($db, $sql);
		if (mysqli_num_rows($r) > 0) {
			        echo "<script>alert('User Already Exist. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=spreg.php");
		}
		else if($password==$conf)
		{
			$sql = "INSERT INTO service (ServProvider_name,Circle,password) VALUES ('$name', '$username', '$password')";
			$r=mysqli_query($db, $sql);
			session_start();
			$_SESSION["pass"] = $password;
			header("Location:sp.php");
		}
		else{
			echo "<script>alert('Passwords must be same. Redirecting to Register Page.');</script>";
			echo "<p><h2>Redirecting Within 2 Seconds....................</h2></p>";
			header("Refresh:0.5;url=spreg.php");
		}
	}
	
?>