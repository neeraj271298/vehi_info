<?php session_start(); ?>
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
	margin-bottom:10px;
margin-left:20px;
	font-size:20px;
	font-family:Arial;
}
.info table{
	border:1px solid #5f5f5f;
	width:800px;
	text-align:center;
	margin-left:50px;
}
.info table tr{
	border:1px solid #5f5f5f;
	height:30px;
	
}
.info table td{
	border:1px solid #5f5f5f;
	}
.submit{
	margin-top:150px;
	margin-left:400px;
	width:100px;
	background-color:#4CAF50;
	height:25px;
	border:1px solid #5f5f5f;
	border-radius:12px;
}
.check1{
	width:30px;
	margin-left:300px;
	margin-top:30px;
	}
.dnumber{
	margin-left:300x;
	width:250px;
	height:30px;
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
<div class="info">
<h3 class="head">Your Welcome</h3>
<p>Do You want dream number plate ? </br>VIP car numbers to be sold in online auction </p>
<table>
<tr>
  <td>S.No.</td>
  <td>Special Registration Mark</td>
  <td>Special Fee</td>
</tr>
<tr>
<td>1.</td>
<td>0001-0010</td>
<td>Rs. 1,00,000 (one lac)</td>
</tr>
<tr>
<td>2.</td>
<td>0011-0100</td>
<td>Rs. 1,00,000 (one lac)</td>
</tr>
<tr>
<td>3.</td>
<td>0101-0999</td>
<td>Rs.25,000(twenty five thousand)</td>
</tr>
<tr>
<td>4.</td>
<td>1000-9999</td>
<td>Rs.5,000 (five thousand)</td>
</tr>
</table></br>
<p>If you want your dream number plate then check the box</p>
<form action="number.php" method="post" >
<input type="submit" name="submit" value="submit" class="submit" />
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
<?php

if(isset($_POST['submit'])){
	
	
		 echo "<script>window.location='number2_truck.php';</script>";
	}

?>