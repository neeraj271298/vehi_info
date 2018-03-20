<?php session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'neeraj');
 $user=$_SESSION['username'];
$q="SELECT * from vehi_add where username='$user'";
$res=mysqli_query($con,$q);
$num=mysqli_num_rows($res);
if($num>=1)
{
	$arr=mysqli_fetch_array($res);
	$dis=$arr['district'];
	$sta=$arr['state'];
	$q1="SELECT * from num_rec where district='$dis'";
	$res1=mysqli_query($con,$q1);
	$num1=mysqli_num_rows($res1);
	if($num>=1)
	{
		$arr1=mysqli_fetch_array($res1);
        $disval=$arr1['disval'];
		$staval=$arr1['staval'];
		 $staval." ";
		 $disval." ";
		$char="ZXCVBNMLKJHGFDSAQWERTYUIOP";
		$char=substr(str_shuffle(str_repeat($char,3)),0,2);
		$number="11223344556677889900";
	    $number=str_shuffle(str_repeat($number,5));
		 $number=substr($number,0,4);
		 $number1=$staval." ".$disval." ".$char." ".$number;
		$q2="UPDATE vehicle_bus SET number_plate='$number1' WHERE username='$user'";

         $res2=mysqli_query($con,$q2);
        
         if($res2)
		 {
			 echo "<script>alert('number plate generated');</script>";
		 }			 
		
		
	}
	else{
		
		echo 'some error';
	}
}
else{
	
	echo 'some err';
}

?>

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
.number{
	height:100px;
	width:300px;
	border:1px solid #4CAF50;
	border-radius:10px;
	margin-left:200px;
	margin-top:200px;
}
.number h1{
	text-align:center;
	font-size:30px;
	font-family:arial;
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
<div class="form">
<?php if(isset($number))
{
?>
<div class="number" >
<h1><?php echo $number1; ?></h1>
</div>	
<?php } ?>
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
