<!DOCTYPE html>
<html>
<title>Tutor Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/gif/png" href="newlogo.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
.button{
  background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
a{
text-decoration:none;
}
</style>
<body>

  <?php
      $username = "";
      $email = "";
      $errors = "";
  // connect to database
      $db = mysqli_connect('localhost','root','123456789','recharge');
      session_start();
      $username = $_SESSION["pass"];
      $query  = "SELECT * from service where password = '$username' ";
      $r=mysqli_query($db, $query);
      $res=mysqli_fetch_assoc($r);
   
$anw2 ="";
$err4 ="";
$err5 ="";
$err6 ="";
$error3 ="";
$error1 ="";
$answer1 ="";
$error2="";
$target_dir = "plans/";

$uploadOk = 1;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType != "pdf") {
    $error3 = "Sorry, only JPG,JPEG,PNG,GIF files are allowed.";
    $uploadOk = 0;
  }
    else if (file_exists($target_file)) {
    $err5 = "Sorry, plan already exists.";
    $uploadOk = 0;
   }
    else if ($_FILES["fileToUpload"]["size"] > 50000000) {
    $err6 = "Sorry, your plan is too large.";
    $uploadOk = 0;
   }
  else if(strcmp($imageFileType, 'pdf')== 0){
         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $answer1 = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $uploadOk = 1;
        }
    }
  else if(strcmp($imageFileType,'jpeg')==0||strcmp($imageFileType,'jpg')==0||strcmp($imageFileType,'png') == 0||strcmp($imageFileType,'gif') == 0){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
       $anw2 = "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $answer1 = "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $img=basename( $_FILES["fileToUpload"]["name"]);
        setlocale(LC_CTYPE, "en_US.UTF-8");
        $py=exec("C:\\xampp\\htdocs\\new\\offers.py $img");
       }
       else{
        $uploadOk =0;   
       }
       } 
    }
    else if ($uploadOk == 0) {
    $error1 = "Sorry, your file was not uploaded.";
    }

}

?>
<p style="font-size: 25px;">
<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $res['Logo'] ).'" style="width:80%;" alt="upload your pic";/>' 
   ?></a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button w3-teal" href="#">Area Handled</a>
  <p class="w3-bar-item "><?php echo $res['ServProvider_name'];?></p>
  <a class="w3-bar-item "><?php echo $res['Circle'];?></p>
  <a class="w3-bar-item" href="SE.php">Sign-Out</a>

</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide"><?php echo $res['ServProvider_name']; echo " "; echo $res['Circle'];?>'s Space</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">WELCOME <?php echo $res['ServProvider_name']; echo " "; echo $res['Circle'];?></h1>
</header>

<div class="w3-container" style="padding:32px">
<h2>About Undergoing Courses</h2>



<div class="w3-panel w3-light-grey w3-padding-16 w3-card">
<h3 class="w3-center">Assignments To be uploaded</h3>
<div class="w3-content" style="max-width:800px">

<div class="w3-row">
  
    <form action="sp.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input class="button" type="file" name="fileToUpload" id="fileToUpload">
    <input class="button" type="submit" value="uplaod" name="submit">
       <?php 
echo "<br>$anw2 $err4 $answer1 $error2 $error3 $err6 $err5 $error1";
    ?>
</form>

  </div>
  
</div>
</div>
<div class="w3-panel w3-light-grey w3-padding-16 w3-card">
<h3 class="w3-center"></h3>
<div class="w3-content" style="max-width:800px">

<div class="w3-row">
  
   <div class="w3-col m6 w3-large w3-margin-bottom" style="margin-left: 250px; margin-top: 50px;">
        <i class="fa fa-user" style="width:30px"></i><?php echo $res['ServProvider_name']; echo " "; echo $res['Circle'];?><br>
        <i class="fa fa-phone" style="width:30px"></i> customer-care: +91-78-46-352536<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: akar@gmail.com<br>
        <a id="contact"></a>
      </div>
     
    
  </div>
  
</div>
</div>
</div>
</div>

<footer class="w3-container w3-theme" style="padding:32px">
  <p>Footer information goes here</p>
</footer>
     
</div>

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 
