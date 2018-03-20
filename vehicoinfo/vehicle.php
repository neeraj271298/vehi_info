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
.inner{
	height:170px;
	width:150px;
	border:1px solid black;
	float:left;
	margin:10px;
}
.side
{
margin:10px;
	display:inline-block;
	width:75%;
	height:300px;
border:none;
margin-bottom:10px;
}
.label
{
display:block;
margin:20px;
margin-left:20px;
margin-bottom:45px;
opacity:0.8;
font-family:arial;
font-size:17px;
}
.div3
{
	margin-left:20px;
	display:block;
	height:350px;
	width:800px;
	border:none;
	
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
<li><a href="login.php">VEHICLE STATUS</a></li>
<li><a href="login.php">INSURENSE STATUS</a></li>
<li><a href="login.php">POLLUTION STATUS</a></li>
<li><a href="login.php">DOWNLOAD FORMS</a></li>
<li><a href="login.php">FAQ</a></li>
</ul>
</div>
<div class="info">
<div class="inner"></div>
<div class="side">
<label class="label"><b>NAME</b>:- PARAM CHATTANI</label>
<label class="label"><b>PHONE</b>:- 9314401288</label>
<label class="label"><b>ADHAAR CARD NO.</b>:- 1086 - 5044 - 1899</label>
</div>
<div class="div3">
<label class="label"><b>ADDRESS</b>:- 63/73 HEERA PATH</label>
<label class="label"><b>PAN CARD NO.</b>:- 1234#####</label>
<label class="label"><b>NO. PLATE</b>:- RJ14 - 5044 - 1899</label>

<label class="label"><b>CHASIS NO.</b>:- 175###</label>
<label class="label"><b>ENGINE NO.</b>:- 1234#</label>
</div>
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