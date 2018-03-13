<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Payment</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">

<div class="row">
  
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
<div class="col-xs-12 col-md-4">  


<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" >Wallet Ammount</h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
</div>
</div>                    
</div>

<h3 class="panel-title display-td"></h3>
<div class="panel-body">
<form role="form" action="gse.php" id="payment-form">

<div class="row">
<div class="col-xs-5 col-md-5">
<div class="form-group">
<label for="cardCVC">Fund Amount</label>
<input 
type="tel" 
class="form-control"
name="fund"
placeholder="Rs"
autocomplete="cc-csc" 
required
/>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<button class="btn btn-success btn-lg btn-block" type="submit">Add Fund</button>
</div>
</div>
<div class="row" style="display:none;">
<div class="col-xs-12">
<p class="payment-errors"></p>
</div>
</div>
</form>
</div>
</div>            
<!-- CREDIT CARD FORM ENDS HERE -->


</div>            



</div>
</div>

	<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js'></script>

  

    <script  src="js/index.js"></script>

</body>

</html>
