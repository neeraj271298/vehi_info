

<html>
<head>
<link href="style.css" rel="stylesheet" />
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
  <li><a href="insure.php">INSURENSE</a></li>
   <li><a href="pllu.php">POLLUTION</a></li>
</ul>
</li>
</ul>
</div>
<div class="nav_right">
<ul>
<li><a href="login.php">LOGIN</a></li>
<li><a href="resister.php">RESISITER</a></li>
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
<style>
.form
{
	margin:50px;
	margin-left:200px;
width:60%;
height:60%;	
	
}
.label1
{

	display:block;
	margin:20px;
	font-family:arial;
	font-size:18px;
	opacity:0.8;

	
}
.input1
{
display:block;
width:90%;
	margin:20px;
	margin-bottom:60px;
	height:50px;
	font-family:arial;
	font-size:16px;
	padding:5px;
}
.textarea
{
display:block;
width:90%;
	margin:20px;
	height:200px;
	margin-bottom:60px;
	font-family:arial;
	font-size:16px;
	padding:5px;
	text-align:centre;
}
.button
{
	display:block;
	margin-top:50px;
	margin-left:300px;
	height:60px;
	width:200px;
	font-size:16px;
	opacity:0.8;
	font-family:arial;
	background-color:#f3f3f3
}
</style>
<div class="form">
<form method="post">
<label class="label1"><b>EMAIL ID</b></label>
<input type="text" name="email" class="input1" placeholder="PLEASE ENTER YOUR EMAIL ID" />
<label class="label1"><b>COMMENT BOX</b></label>
<input type="text" name="area"  class="textarea" placeholder="ANY DOUBT?? ASK HERE" />
<button class="button" name="button"><b>SUBMIT QUERIES</b></button>
</form>
</div>
</div>
<?php
if(isset($_POST['button']))
{
	if(!empty($_POST['email']) && !empty($_POST['area']))
	{
		
	
	
	$email=$_POST['email'];
	$area=$_POST['area'];
	$con=mysqli_connect('localhost','root','');
	mysqli_select_db($con,'neeraj');
	$q="INSERT INTO faq (email, area) VALUES ('$email', '$area')";
	$res=mysqli_query($con,$q);
	$res;
	if($res)
	{
		echo "<script>alert('Queries Successfully Submitted')</script>" ; 
		
	}
	}
	else
	{
		echo "<script>alert('Please Fill In All The Details')</script>" ; 
	}
	
}	
?>
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