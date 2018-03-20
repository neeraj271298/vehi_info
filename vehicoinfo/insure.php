
<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>
.form {
	clear:right;
display:inline;
margin-top:50px;
margin-left:100px;
padding:10px;
height:100%;
width:65%;
border:1px solid black;
}
</style>

</head>
<body>
<div class="main_top">
<img src="logo.png" class="logo" />
<h1 class="main_logo">VEHICOINFO</h1>
</div>
<div class="nav_bar" id="navbar" >
<div class="nav_left">
<ul>
<li><a href="home.php">HOME</a></li>
<li>VEHICLE
<ul>
  <li><a href="car.php">CAR</a></li>
   <li><a href="bike.php">BIKE</a></li>
    <li><a href="truck.php">TRUCK</a></li>
	 <li><a href="bus.php">BUS</a></li>
</ul>
</li>
<li>PERMIT
<ul>
  <li><a href="tourist.php">TOURIST</a></li>
   <li><a href="national.php">NATIONAL</a></li>
    <li><a href="state.php">STATE</a></li>
</ul>
</li>
<li>OTHER
<ul>
  <li><a href="insure.php">INSURANCE</a></li>
   <li><a href="pllu.php">POLLUTION</a></li>
</ul>
</li>
</ul>
</div>
<div class="nav_right">
<ul>
<li><a href="login.php">LOGIN</a></li>
<li><a href="resister.php">REGISTER</a></li>
</ul>
</div>
</div>
<div class="middle">
<div class="hor_nav" id="hornav">
<ul>
<li><a href="home.php">HOME</a></li>
<li><a href="vehicle.php">VEHICLE STATUS</a></li>
<li><a href="insure1.php">INSURANCE STATUS</a></li>
<li><a href="pllu2.php">POLLUTION STATUS</a></li>
<li><a href="download.php">DOWNLOAD FORMS</a></li>
<li><a href="faq.php">FAQ</a></li>
</ul>
</div>
<div class="form">
<style>
.h1 {
font-family: "Times New Roman", Times, serif;
text-align: center;
margin:10px; 
}
p.serif {
    font-family: arial;
	font-size:20px;
	opacity:0.9;
}
.h3 {
	
font-family: arial;
	font-size:20px;
	opacity:0.9;
}
.button{
	background-color:#4CAF50;
	margin-top:10px;
	margin-left:350px;
	width:100px;
	heigth:25%;
	font-size:20px;
	font-family:arial;
	border:1px solid black;
	border-radius:35px;
	padding:3px;
}
</style>

<p class="serif"><h1 class="h1">INSURANCE POLICIES</h1></p>
<hr><hr><hr><hr><br>
<p class="serif">Motor or vehicle insurance is an insurance policy that protects the owner of the vehicle against
any financial loss arising out of damage or theft of vehicle.<br>
Motor vehicle coverage also includes damage caused to third party or property.<br>
Motor Insurance is mandatory in India as per government rules.Motor Insurance is available for both cars and two wheelers.
<br>
<br>
<br>
<h3 class="h3">COVERAGE</h3></p>
<p class="serif">
<br>
The cover with car insurance includes:
<br><br>
Damage to vehicle caused due to accident, riots, strikers, malicious acts, earthquake, flood, storm etc<br>Loss or theft of vehicle<br>Liability to third parties<br>Personal Accident Cover available for owner drive</p>
<br><p class="serif"><h3 class="h3">WHAT IS NOT COVERED?</h3></p>
<p class="serif"><br>General ageing, wear and tear
<br>
Mechanical or Electrical Breakdown
<br>
Damage caused by person under influence of alcohol, drugs and any other intoxicating substance
<br>
Damage caused by person driving without valid driving license
<br>
Consequential loss
<br>
Loss damage outside India</p><br>
<p class="serif"><h3 class="h3">Factors which affect premium</h3></p>
<p class="serif"><br>
IDV: This is the cover amount of the vehicle. Cover is decided on basis of value of vehicle with depreciation adjusted.
<br></p>
<br><p class="serif"><h3 class="h3">HOW TO BUY VEHICLE INSURANCE ??</h3></p>
<br><p class="serif" > All the conditions listed will be applied when you will apply for insurance . Hence carefully traversing through this information means that you agree to all the conditions stated above .<br><br><b> CLICK on the button below to apply for insurance</b>.</p>
<form method="post">
<button class="button" name="button" value="next">NEXT</button></form></div>
<?php
if(isset($_POST['button']))
{header("Location: insure1.php");}?>
</div>
<hr class="line">
<div class="bottom">
<span class="copy">Copyright</span>&copy;2018, VEHICOINFO. All Rights Reserved. This site is designed, developed and Hosted by Annonymous.</br></br></br>
<span class="dis">Discliamer</span>:Disclaimer: The contents of this web site are supposed to provide quick and easy access of information related to vehicles. Various government agencies and the citizens of the country will be
 benefited from this Web Site. We are taking every precaution to provide accurate and updated information of vehicles available in the Central Repository. However, the details available at the site, may 
 not be up to date due to failure of Network link between Transport Offices and State Data Centre. Hence, we do not assume any legal liability on the completeness, accuracy or usefulness of the 
 contents provided on this web site. We welcome your suggestions to improve our site and request that any error found may kindly be brought to our notice. 
 Thanks for visiting our site. For any query regarding this website please visit 

</div></br></br></br></br></br></br></br></br></br></br></br>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

</script>
</body>
</html>  