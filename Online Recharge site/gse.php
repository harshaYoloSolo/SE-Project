<!DOCTYPE html>
<html>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">

body{
  background-color:#f4f2f1;
	text-decoration:none;
}
#s{
  padding-top: 5px;
  padding-left: 5px;
  padding-right: 5px;
  padding-bottom: 5px;
}

#cent {
  background-color: #ffffff  ;
  position:absolute;
  top:80%;
  left:40%;
  margin-top:-50px; /* this is half the height of your div*/  
  margin-left:-200px; /*this is half of width of your div*/
  border:solid black 1px;
  padding: 30px;
  border-radius: 10px;
  border-width: 2px;
  box-shadow: 2.5px 2.5px #69119B;
}
.mslides{display: none;}
</style>
<body>
<?php
      $username = "";
      $email = "";
      $errors = "";
  // connect to database
      $db = mysqli_connect('localhost','root','123456789','recharge');
      session_start();
      $username = $_SESSION["loguser"];
      if (isset($_POST['Fund Amount'])) {
      $name = $_POST['fund'];
      $query  = "SELECT * from customer Where username = '$username' ";
      $r=mysqli_query($db, $query);
      $res=mysqli_fetch_assoc($r);
?>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-yellow w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <div class="img-with-text"><a class="w3-bar-item w3-button w3-padding-large w3-hover-green" style="font-size: 25px;">Rechargezzz<p style="font-size: 13px;">Where recharing is ezz.</p></a></div>
     <a href="wallet.php" class="btn btn-info w3-red w3-large w3-hover-green" role="button" style="float: right; margin-top: 23px; margin-right: 12px; border: none;">Add Fund to Wallet</a>
    <a href="SE.php" class="btn btn-info w3-red w3-large w3-hover-green" role="button" style="float: right; margin-top: 23px; margin-right: 12px; border: none;">Logout</a>
    
   </div>

</div>

<div class="w3-content" style="max-width:2000px;margin-top:100px;">
<div class="w3-content w3-bar-block w3-grey" style="float: right;width:199px;height:768px;" id="s">
  <a href="#" class="w3-bar-item w3-button w3-hover-green">Mobile</a><br>
  <a href="datacard.html" class="w3-bar-item w3-button w3-hover-green">DTH</a><br>
  <a href="datacard1.html" class="w3-bar-item w3-button w3-hover-green">DataCard</a><br>
  <p>Wallet details:</p><br><?php echo"Rs:  ";echo $res['wallet'];echo"   available"?>

</div>
</div>
 <p style="font-size: 25px; text-align: center;">Welcome
                         <?php echo $res['username'];?></p>
<div class="w3-content" style="width:900px; margin-left:135px; border: solid 0.75px;">
  <img class="mslides" src="rech.jpg" style="width:100%">
  <img class="mslides" src="dth.jpg" style="width:100%">
</div>
<div id=cent>
  
<p style="font-size: 20px; text-align:center; "><b>RECHARGE YOUR MOBILE</b></p>

	<form action="paymob.php" method="POST">
		Mobile Number <input type="text" name="Phone Number" style="border: solid black 1px; border-radius: 5px; border: solid 0.5px; border-color: #FFC300  
;" placeholder="+91" maxlength="10" pattern="[6789][0-9]{9}" required><br>
		 <input type="radio" onclick="javascript:j1();" name="service" value="Prp" style="margin:25px;" id="yesc" checked> Prepaid 
		 <input type="radio" onclick="javascript:j1();" name="service" value="Pop" style="margin:25px;" id="noc"> Postpaid  <input class="btn btn-info w3-red w3-large w3-hover-blue" type="submit" style="float: right; margin-top: 12px; margin-left: 100px;">Proceed</input><br>

		
    <div id="ifYes">
		<select name="operator" required style=" color: #1815D2; background-color: #eeeeee; border-radius: 5px; border: solid 0.5px; border-color: #FFC300  
;">
  				<option value="">Operator</option>
  				<option value="aircel">Aircel</option>
  				<option value="airtel">Airtel</option>
  				<option value="bsnl">BSNL</option>
  				<option value="Tata">Tata Docomo GSM</option>
  				<option value="idea">Idea</option>
  				<option value="mtnl">MTNL delhi</option>
  				<option value="tr">Telenor</option>
  				<option value="vodafone">Vodafone</option>
  				<option value="tatac">Tata Docomo CDMA</option>
  				<option value="mtnl1">MTNL Mumbai</option>
  				<option value="jio">JIO</option>
        </select>
	<select name="circle" required style="color: #1815D2; background-color: #eeeeee; border-radius: 5px; margin-left: 50px; border: solid 0.5px; border-color: #FFC300  
;">
  				<option value="">Circle</option>
  				<option value="AP">Andhra Pradesh</option>
  				<option value="As">Assam</option>
  				<option value="Bi">Bihar</option>
  				<option value="Cn">Chennai</option>
  				<option value="dl">Delhi</option>
  				<option value="gj">Gujrat</option>
  				<option value="hr">Haryana</option>
  				<option value="hp">Himachal Pradesh</option>
  				<option value="Ka">Karnataka</option>
  				<option value="kl">Kerala</option>
  				<option value="mp">Madhya Pradesh</option>
  				<option value="mr">Maharastra</option>
  				<option value="mu">Mumbai</option>
  				<option value="ne">North East</option>
  				<option value="Or">Orissa</option>
  				<option value="pj">Punjab</option>
  				<option value="rj">Rajasthan</option>
  				<option value="tn">Tamilnadu</option>
  				<option value="upe">Uttar Pradesh(E)</option>
  				<option value="upw">Uttar Pradesh(W)</option>
  				<option value="wb">West Bengal</option>
  				<option value="jk">JK</option>
  				<option value="Uc">Uttarnchal</option>
	</select>
	</div>
	<div id="ifno" style="display:none;">
		<select required name="operator1"style="color: #1815D2; background-color: #eeeeee; border-radius: 5px; border: solid 0.5px; border-color: #FFC300  
;">
  				<option value="Operator">Operator</option>
  				<option value="aircel">Aircel</option>
  				<option value="airtel">Airtel</option>
  				<option value="bsnl">BSNL</option>
  				<option value="Tata">Tata Docomo GSM</option>
  				<option value="idea">Idea</option>
  				<option value="mtnl">MTNL delhi</option>
  				<option value="tr">Telenor</option>
  				<option value="vodafone">Vodafone</option>
  				<option value="tatac">Tata Docomo CDMA</option>
  				<option value="mtnl1">MTNL Mumbai</option>
  				<option value="jio">JIO</option>
        </select>
    </div>
	</form>
</div>

<div class="w3-container" style="width:73%; margin-left:175px;" >
  <h2 style="text-align: center;">Offers For You <?php echo $res['username'];?></h2>
    <div class="w3-display-container mySlides">
      <img src="rech.jpg" style="width: 100%">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">20% cashback offer for mobile recharge</span>
      </div>
    </div>
    <div class="w3-display-container mySlides">
      <img src="dth.jpg" style="width:100% ">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">15% cashback offer for DTH recharge</span>
      </div>
    </div>
        <div class="w3-display-container mySlides">
      <img src="IRCTC-1.jpg" style="width:100% ">
      <div class="w3-display-middle w3-container w3-padding-32">
        <span class="w3-white w3-padding-large w3-animate-bottom">10% cashback on rail E-tickets on IRCTC website</span>
      </div>
    </div>

    <!-- Slideshow next/previous buttons -->
    <div class="w3-container w3-blue  w3-large">
      <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
      <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
    </div>
  </div>
</div>
<script type="text/javascript">


function j1() {
    if (document.getElementById('yesc').checked) {
        document.getElementById('ifYes').style.display = 'block';
    }
    else{
      document.getElementById('ifYes').style.display = 'none';
    }
    if (document.getElementById('noc').checked) {
      document.getElementById('ifno').style.display = 'block';
}
else{
  document.getElementById('ifno').style.display = 'none';
}
}
</script>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mslides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */


</script>
</body>
</html>
