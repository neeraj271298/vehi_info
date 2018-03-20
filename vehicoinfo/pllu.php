<?php session_start();?>
<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>
.form{
	height:900px;
	width:900px;
	border:1px solid #5f5f5f;
    margin-left:40px;
	margin-top:20px;
}
.form h1{
	text-align:center;
	color:#4CAF50;
	font-size:50px;4
}
.form h3{
	margin-left:10px;
	font-size:20px;
	color:#4CAF50;
} 
.form p{
	margin-top:10px;
    margin-left:10px;
	font-size:15px;
	font-family:Arial;
}
.form table td{
	border:1px solid #5f5f5f;
	text-align:center;
	height:30px;
}
.table_top{
	background-color:#5f5f5f;
	color:white;
	border:1px solid white;
}
.form table{
	margin-left:150px;
}
.table_state td{
	width:200px;
}
.form li{
	margin-left:40px;
}
.button{
	margin-left:350px;
	width:200px;
	background-color:#4CAF50;
	height:25px;
	margin-top:80px;
	border:1px solid #5f5f5f;
	border-radius:12px;
}
.button a{
	text-decoration:none;
	color:black;
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
<li><a href="permit.php">PERMIT</a></li>
<li>OTHER
<ul>
  <li><a href="insure.php">INSURENSE</a></li>
   <li><a href="pllu.php">POLLUTION</a></li>
</ul>
</li>
</ul>
</div>
<div class="nav_right">
<ul><?php 
if(isset($_SESSION['email']))
{
?>
<li><a href="logout.php">LOGOUT</a></li>
<?php
}
else
{
?>	
<li><a href="login.php">LOGIN</a></li>
<li><a href="resister.php">REGISITER</a></li>
<?php
}
?>
</ul>
</div>
</div>
<div class="middle">
<div class="hor_nav" id="hornav">
<ul>
<li><a href="home.php">HOME</a></li>
<li><a href="vehicle.php">VEHICLE STATUS</a></li>
<li><a href="insure1.php">INSURENSE STATUS</a></li>
<li><a href="pllu2.php">POLLUTION STATUS</a></li>
<li><a href="download.php">DOWNLOAD FORMS</a></li>
<li><a href="faq.php">FAQ</a></li>
</ul>
</div>
<div class="form">
<h1>Pollution Under Control</h1>
</br>
<h3>PUC</h3><p>Pollution Under Control (PUC) is an authorized certification granted to vehiclesthat successfully pass the regulated PUC test.</br> Since the validity of the PUC certificate is only for six months, every vehicle owner needs to get their vehicle tested twice in a</br> year</p>
<p>The test checks the emission of % of CO and other Hydrocarbons in ppm against the permitted value</p></br>
<p>The PUC certificate must mention:</p>
<ul>
<li>the certificate serial number.</li>
<li>the vehicle license plate number.</li>
<li>the date of testing.</li>
<li>the expiry date.</li>
<li>the emission readings.</li>
</ul></br>
<p>The vehicles when tested should meet the following criteria:</p></br>
<table cellspacing="0" class="table_state">
 <tr class="table_top">
   <td>TYPE OF VEHICLE</td>
   <td>% OF CO</td>
   <td>HYDROCARBON MEASURED IN PPM</td>
 </tr>
 <tr>
   <td>2 and 3 wheelers (2/4 - stroke) manufactured on or before 31st March 2000</td>
   <td>4.5</td>
   <td>9,000</td>
 </tr>
 <tr>
   <td>2 and 3 wheelers (2 - stroke) manufactured after 31st March 2000</td>
   <td>3.5</td>
   <td>6,000</td>
 </tr>
 <tr>
   <td>2 and 3 wheelers (4 - stroke) manufactured after 31st March 2000</td>
   <td>3.5</td>
   <td>4,500</td>
 </tr>
 <tr>
   <td>4 wheelers manufactured according to Pre Bharat Stage II Norms</td>
   <td>3.0</td>
   <td>1,500</td>
 </tr>
  <tr>
   <td>4 wheelers manufactured according to Pre Bharat Stage II, Stage III or subsequent Norms</td>
   <td>0.5</td>
   <td>750</td>
 </tr>
</table>
<button class="button" name="pol_button" ><a href="pllu2.php">Check Your PUC Status</a></button>
</div>
</div>
<hr class="line">
<div class="bottom">
<span class="copy">Copyright</span>&copy;2018, VEHICOINFO. All Rights Reserved. This site is designed, developed and Hosted by NEERAJ.</br></br></br>
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