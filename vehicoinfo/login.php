<?php session_start();
if(isset($_SESSION['email']))
{
	echo "<script>alert('already loged in');
	window.location='home.php';
	</script>";
}
else
{
?>
<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>
.label{
	
	margin-left:50px;
	font-size:25px;
	color:#4CAF50;
	text-align:center;
}
.login{
	color:#4CAF50;
	font-size:50px;
	text-align:center;
}
.middle{
	height:500px;
	width:1500px;
}
.form{float:left;
	background-color:white;
	height:400px;
	width:600px;
	margin-left:300px;
	margin-top:100px;
	border:1px solid #5f5f5f;
}
.input{
	margin-left:50px;
	height:30px;
	width:300px;
	border:1px solid #4CAF50;
	border-radius:5px;
}
.submit{
	margin-left:250px;
	width:100px;
	background-color:#4CAF50;
	height:25px;
	border:1px solid #5f5f5f;
	border-radius:12px;
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
<ul>
<?php 
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
<div class="middle" >
<div class="hor_nav">
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
<form action="login.php" method="post">
<h1 class="login">LOGIN</h1></br></br>
<label class="label" >USERNAME: </label></br></br>
<input type="text" placeholder="username" class="input" name="username"/></br></br>
<label class="label" >PASSWORD: </label></br></br>
<input type="password" placeholder="Password" class="input" name="password"/></br></br></br>
<input type="submit" value="Login" name="login" class="submit"/>
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
include('connect.php');
if(isset($_POST['login']))
{ 
	$user=mysqli_real_escape_string($con,$_POST['username']);
	$pass=mysqli_real_escape_string($con,$_POST['password']);
    $salt="abcd1234";
    $pass=$pass.$salt;			
    $pass=md5($pass);
	$q="select * from vehi_record where username='$user' and password='$pass'";
	$res=mysqli_query($con,$q);
	$rre=mysqli_num_rows($res);
	if($rre>=1)
	{
		$_SESSION['username']=$user;
		echo '<script type="text/javascript">alert("Log in success");
		window.location="home.php";
		</script>';
	}
	else
	{
		echo '<script type="text/javascript">alert("Log in Failed")</script>';
	}
	
}
?>
<?php }?>