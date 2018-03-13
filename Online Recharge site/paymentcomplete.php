<?php
session_start();
 echo "<p><h1>Payment Successful. Redirecting To Ticket Confirmation Page. Please Wait........<h1><p>";
 if(isset($_SESSION['loguser'])){
 header("Refresh:1;url=register1.php");
 }
 else{
 header("Refresh:1;url=register.php");
}
?>