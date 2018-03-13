<?php
 echo "<p><h1>Proceeding Through Safe Gateway. Please Wait........<h1><p>";
 SESSION_START();
 $_SESSION['cd']=$_GET['cardNumber'];
 header("Refresh:1;url=paymentcomplete.php");
?>