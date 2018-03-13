<?php
	$username = "";
	$email = "";
	$errors = "";
	// connect to database
	$db = mysqli_connect('localhost','root','123456789','recharge');
		session_start();
	if (isset($_POST['login'])) {
		$circle = $_POST['circle'];
		$password = $_POST['Password_1'];
		$sql = "SELECT Circle,password FROM service where Circle = '$circle'and password= '$password'";
			$r=mysqli_query($db, $sql);
				if (mysqli_num_rows($r) >  0) {
					$_SESSION["pass"] = $password;
						header("Location:k.php"); //Redirect browser */
					exit();
    		//output data of each row
				} else {
    				echo "<script>alert('User Does not Exist. Redirecting to SignUp Page.');</script>";
			echo "<p><h1>Redirecting Within 2 Seconds....................</h1></p>";
			header("Refresh:0.5;url=spreg.php");
}
		}
	
?>

