<?php session_start();
if(isset($_SESSION['id']))
{

	setcookie('insurel','set',time()+10);		
	
}
?>
<html>
<head>
<link href="style.css" rel="stylesheet" />
<style>
.form{
	height:700px;
	width:900px;
	border:1px solid #5f5f5f;
    margin-left:40px;
	margin-top:20px;
}
.form h1{
	text-align:center;
	font-size:50px;
	color:#4CAF50;
} 
.form select{
	height:25px;
	width:250px;
	border:1px solid #4CAF50;
	border-radius:5px;
	margin-left:20px;
	margin-top:8px;
}
.input{
	width:250px;
	height:25px;
	border:1px solid #4CAF50;
	border-radius:5px;
	margin-left:20px;
	margin-top:8px;
}
.form label{
      margin-left:20px;
	  margin-top:10px;
	  	font-size:15px;
	font-family:Arial;

}
.input1{
	margin-left:10px;
}
.button{
	margin-top:10px;
		margin-left:300px;
	width:250px;
	background-color:#4CAF50;
	height:25px;
	border:1px solid #5f5f5f;
	border-radius:12px;
}
.line{
	margin-top:950px;
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
<?php 
if(!isset($_COOKIE['insurel']))
{
?>
<form method="post" action="insure1.php"> 
<h1 class="h1">ISSUE INSURANCE CARD</h1>
<label class="label"><b>INSURANCE COMPANY'S NAME</b></label>
<br>
<select class="select" name="sele">
  <option value="Bajaj Allianz Insurance">Bajaj Allianz Insurance.</option>
  <option value="Bharti Axa Insurance">Bharti Axa Insurance</option>
  <option value="Hdfc Ergo Insurance">Hdfc Ergo Insurance</option>
  <option value="ICICI Lombard Insurance">ICICI Lombard Insurance</option>
</select>
<br>
<br>
<label class="label"><b>POLICY NO</b></label><br>
<input type="text" class="input" name="policy" placeholder="for eg -:  37#### - ## - ## - 650001####"/><br><br>
<label class="label"><b>ISSUE DATE</b></label><br>
<input type="text" class="input" name="texti" id="date" placeholder="for eg -: card issue date"/><br><br>
<label class="label"><b>EXPIRY DATE</b></label><br>
<input type="text" class="input" name="textd" id="date1" placeholder="for eg -: card expiry date"/><br><br>
<label class="label"><b>TYPE OF VEHICLE</b></label><br>
<input type="radio" class="input1" name="radio" value="two" id="two" onclick="document.getElementById('demo').value=2000" /><label>TWO WHEELER</label>
<input type="radio" class="input1" name="radio" value="three" id="three" onclick="document.getElementById('demo').value=5000" /><label>THREE WHEELER</label>
<input type="radio" class="input1" name="radio" value="four" id="four" onclick="document.getElementById('demo').value=7000" /><label>FOUR WHEELER</label>
<br>
<label class="label2">**by clicking on any one of the following radio button , expense will be shown automatically</label>
<br>
<br>
<label class="label"><b>APPROXIMATE YEAR-EXPENSE</b></label><br>
<input type="text" class="input" name="text" id="demo"/><br><br>
<input type="checkbox" class="input1" name="checkbox" value="checkbox" id="checkbox" /><label class="label2">I have read all the terms and condition of insurance policy and I agree to all the policies put before me and adhere by the rules decided by government  </label>
<label class="label3">By clicking on the below button your form will be submitted to the policy company chosen by you</label><br><br>
<br><button class="button" name="button">ISSUE INSURANCE CARD</button><br>

</form>
<?php 
} else
{
echo "<script>alert('You have applied for insurance')</script>";
}	?>
	
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
<script>
var d=new Date();
var dd=d.getDate();
var mm=d.getMonth()+1;
var yyyy=d.getFullYear();
d=dd+ '/' + mm + '/' + yyyy;
document.getElementById("date").value=d;
var de=new Date();
var dde=de.getDate();
var mme=de.getMonth()+1;
var yyyye=de.getFullYear()+1;
de=dde+ '/' + mme + '/' + yyyye;
document.getElementById("date1").value=de;
</script>
</body>
</html>  
<?php
if(isset($_POST['button']))
{
	if(isset($_POST['checkbox']))
	{
$con=@mysqli_connect('localhost','root','') or die('not connected');
  @mysqli_select_db($con,'neeraj') or die('not connect to database');
   $company=$_POST['sele'];
	 $policy_no=$_POST['policy'];
	 $issue=$_POST['texti'];
	 $delete=$_POST['textd'];
	//$q="INSERT INTO vehi_insure(username,company,issue,expire,policy_no) values('neeraj','mko','1/2/3','1/2/3',456)";
	 $q="insert into vehi_insure values('neeraj','$company','$issue','$delete',$policy_no)";
	 $res=mysqli_query($con,$q);
	
	if($res)
	{
		echo"<script>alert('successfully applied');</script>";
		$_SESSION['id']=1;
			
	}
	else{
		echo 'retry';
	}
	}
	else{
	    echo "<script>alert('please check the checkbox');window.location='insure1.php';</script>";
	}
}
?>