<?php session_start();?>
<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>
.form{
	height:1100px;
	width:900px;
	border:1px solid #5f5f5f;
    margin-left:40px;
	margin-top:20px;
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
	margin-left:200px;
}
.table_state td{
	width:200px;
}
.form input{
	border:1px solid #4CAF50;
	border-radius:5px;
	margin-left:300px;
	width:200px;
	height:25px;
}
.permit1{
	border:1px solid #4CAF50;
	border-radius:5px;
	margin-left:300px;
	width:200px;
	height:25px;
}
.next_permit{
	background-color:#4CAF50;
	border:1px solid #5f5f5f;
	border-radius:12px;
	margin-top:40px;
	margin-left:380px;
	width:100px;
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
</br>
<h3>Condition</h3><p>A permit other than temporary permit issued under section 87 or a special permit or a special permit issued under sub section (8) of section 88 shall be effective (from the date of issuance or renewal thereof) for a period of 5 years. The fee for the renewal of permit is same as issuance of permit fee. For the renewal of permit the applicant has to submit application (PRA) along with permit renewal fee and other requirements 15 days before the expiry of said permit. If any fee is not paid by the due date, the following late fee shall be payable for the renewal of permits.</p>
</br><h3>Local Permit </h3></br>
<table cellspacing="0" >
<tr class="table_top">
  <td>S.N.</td>
  <td>Type of Vehicle</td>
  <td>Fee Payable</td>
  <td>Permit Period</td>
</tr>
<tr>
  <td>1.</td>
  <td>Light goods Vehicle (LGV)</td>
  <td>2000/- 
Rs. 500 (authorization)</td>
  <td>5 yrs. 
1 yrs.</td>
</tr>
<tr>
  <td>2.</td>
  <td>Heavy Goods Vehicle</td>
  <td>2500/-</td>
  <td>5 Yr.</td>
</tr>
</table>
<h3>National Permit</h3></br>
<table cellspacing="0" >
<tr class="table_top">
  <td>S.N.</td>
  <td>Type of Vehicle</td>
  <td>Fee Payable</td>
  <td>Permit Period</td>
</tr>
<tr>
  <td>1.</td>
  <td>Light goods Vehicle (LGV)</td>
  <td>2015/- 
Rs. 500 (authorization)</td>
  <td>5 yrs. 
1 yrs.</td>
</tr>
<tr>
  <td>2.</td>
  <td>Heavy Goods Vehicle</td>
  <td>2515/-</td>
  <td>5 Yr.</td>
</tr>
</table></br></br>
<p>For obtaining National Permit for any category of vehicle one should opt for at least three states excluding Delhi.Composite fee as stipulated by the concerned states, in the form of Bank Drafts has also to be deposited with STA, Delhi. </p>
</br><h3>Composite fee applicable in few of the states is as under:-</h3></br>
<table cellspacing="0" class="table_state">
  <tr class="table_top">
    <td>S.N.</td>
	<td>State</td>
	<td>Fee Payble</td>
  </tr>
   <tr>
    <td>1.</td>
	<td>Haryana</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>2.</td>
	<td>Rajasthan</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>3.</td>
	<td>U.P.</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>4.</td>
	<td>M.P.</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>5.</td>
	<td>H.P.</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>6.</td>
	<td>J And K</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>7.</td>
	<td>Gujrat</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>8.</td>
	<td>Tamil Nadu</td>
	<td>3000/-</td>
  </tr>
  <tr>
    <td>9.</td>
	<td>Maharashtra</td>
	<td>5000/-</td>
  </tr>
  <tr>
    <td>10.</td>
	<td>Andhra Pradesh</td>
	<td>3000/-</td>
  </tr>
</table>
</br><h3>Select Type Of Vehicle</h3>
<form action="permit.php" method="post">
<select class="permit1"name="permit_db">
<option value="bike">BIKE</option>
<option value="car">CAR</option>
<option value="bus">BUS</option>
<option value="truck">TRUCK</option>
</select></br></br>
<input type="text" name="permit" placeholder="Enter Your No. Plate" />
</br>
<input class="next_permit" type="submit" value="next" name="next" />
</form>
</div>
</div>
</br></br>
<hr class="line">
<div class="bottom">
<span class="copy">Copyright</span>&copy;2018, VEHICOINFO. All Rights Reserved. This site is designed, developed and Hosted by NEERAJ.</br></br></br>
<span class="dis">Discliamer</span>:Disclaimer: The contents of this web site are supposed to provide quick and easy access of information related to vehicles. Various government agencies and the citizens of the country will be
 benefited from this Web Site. We are taking every precaution to provide accurate and updated information of vehicles available in the Central Repository. However, the details available at the site, may 
 not be up to date due to failure of Network link between Transport Offices and State Data Centre. Hence, we do not assume any legal liability on the completeness, accuracy or usefulness of the 
 contents provided on this web site. We welcome your suggestions to improve our site and request that any error found may kindly be brought to our notice. 
 Thanks for visiting our site. For any query regarding this website please visit 

</div></br></br></br></br></br>
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
if(isset($_POST['next']))
{
  $number=$_POST['permit'];
  $con=@mysqli_connect('localhost','root','') or die('not connected');
  @mysqli_select_db($con,'neeraj') or die('not connect to database');
  $database="vehicle_".$_POST['permit_db'];
  $q="select * from $database where number_plate='$number'";
  $res=mysqli_query($con,$q);
  $res1=mysqli_num_rows($res);
  if($res1>=1)
  {
	  echo 'yes';
  }
  else{
	  echo 'no';
  }
  }
?>