<?php session_start();?>
<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>
.info{
	float:left;
	height:700px;
	width:900px;
	border:1px solid #5f5f5f;
    margin-left:40px;
	margin-top:20px;
}
.head{
	text-align:center;
	font-size:40px;
	color:#4CAF50;
}
.mid{
	margin-left:10px;
	color:#4CAF50;
}
.info p{
	margin-left:5px;
	font-size:20px;
}
.info ol li{
	   font-family: Arial;
	margin-left:50px;
	font-size:15px;
	margin-bottom:5px;
}
.button_bike{
	background-color:#4CAF50;
	border:1px solid #5f5f5f;
	border-radius:12px;
	margin-top:100px;
	margin-left:200px;
	width:100px;
}
.button_bike a{
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
if(isset($_SESSION['username']))
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
<div class="info">
<h3 class="head">REQUIREMENT</h3></br>
<p><strong>You Must Full Fill All Requirement Without these You Can Not Purchase A Vehicle.</strong></p></br></br>
<h3 class="mid">Documents required For Vehicle Registration:</h3>
<ol class="orderlist">
<li>Passport size photograph</li>
<li>Attested copy of ID proof – Aadhar Card and PAN Card</li>
<li>Proof of Permanent Residence (attested copies) – Passport, Voter ID Card, copy of LIC policy.</li>
</ol></br>
<p>In case you do not have any of the aforementioned documents, you may provide any of the following documents as an alternative</p></br>
<ol>
<li>Electricity Bill</li>
<li>Phone Bill (BSNL Land Line)</li>
<li>Ration card</li>
<li>House Tax Receipt from corporation</li>
</ol></br>
<p>In case you are purchasing a two-wheeler in a city other than that of your residence, these are the additional documents you will be required to provide. All documents provided must be duly attested.</p>
</br>
<ol>
<li>Copy of Registered Rent Agreement.</li>
<li>Copy of your landlord’s electricity bill.</li>
<li>Letter From Your Employer or Bonafide Certificate from your college.</li>
<li>Original Affidavi</li>
</ol>
<form action="bike.php" method="get">
<button class="button_bike" value="disagree"><a href="home.php">DISAGREE</a></button>
<button class="button_bike"value="agree"><a href="car2.php">AGREE</a></button>
</form>
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