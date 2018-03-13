<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<head>
	<title></title>
</head>
<style type="text/css">
	#cent {
  background-color: #ffffff  ;
  position:absolute;
  top:50%;
  left:40%;
  margin-top:-50px; /* this is half the height of your div*/  
  margin-left:-350px; /*this is half of width of your div*/
  border:solid black 1px;
  padding: 30px;
  border-radius: 10px;
  border-width: 2px;
  box-shadow: 2.5px 2.5px #69119B;
}
</style>
<body>
	<div class="w3-top">
  <div class="w3-bar w3-yellow w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <div class="img-with-text"><a class="w3-bar-item w3-button w3-padding-large w3-hover-green" style="font-size: 25px;">Rechargezzz<p style="font-size: 13px;">Where recharing is ezz.</p></a></div>
 </div>

</div>
	<h3 style="margin-top:100px;">
		You Should enter the amount In order to Recharge Successfully,To know more Mobile offers please visit the link below.
		
	</h3><br>
<div id=cent>
  
<p style="font-size: 20px; text-align:center; "><b>Checkout For Mobile Recharge</b></p>

	<form action="credit.php" method='POST'>Enter Amount:<input type="text" name="amount" style="border: solid black 1px; border-radius: 5px; border: solid 0.5px; border-color: #FFC300  
;" placeholder="Amount"  required>
      <?php 
      $p = $_POST['operator'];
      $c = $_POST['circle'];
      echo "<a href='http://localhost/New%20folder/$p$c.pdf' target='blank'>Plans for your selected operator.</a>"; ?>
	<input type="submit"  value="Proceed To payment" class="btn btn-info w3-red w3-large w3-hover-blue" role="button" style="float: right; margin-top: 12px; margin-left: 100px; border: none;"><br>
</form>
   <a href="https://www.plansinfo.com/" target="blank"><span style="font-size: 25px;">Link For Mobile Recharge plans of different Service Providers.</span></a>

 <div class="w3-content" style="width:900px; margin-left:11px; margin-top:100px; border: solid 0.75px;">
 
   <img class="mslides" src="dth.jpg" style="width:100%">
   <img class="mslides" src="rech.jpg" style="width:100%">
    <img class="mslides" src="bsnl.jpg" style="width:100%">
     <img class="mslides" src="docomo1.png" style="width:100%">
     <img class="mslides" src="fai.jpg" style="width:100%">


</div>
 <h4 style="text-align:center; ">Recent Offers</h4>
  
  <p style="text-align: center;">Offer1 : Get All Sports channel at 100/month.
  <br>

  Offer2 : Get All recharges at 100% cashbackoffer.
  <br>
   Offer3 : RC 179 3g unlimited data for 28days.
   <br>
    Offer4 : RC 58 1gb data for 28days.
</p>
 

</body>
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

</html>
