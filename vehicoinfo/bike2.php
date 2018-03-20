<?php session_start();?>
<html>
<head>
<link href="style.css" rel="stylesheet" />
<script>
function populate(s1,s2)
{

	    var s1= document.getElementById(s1)
		var s2= document.getElementById(s2)
		s2.innerHTML="";
		if(s1.value=="duke"){
			var optionArray=["rc200|KTM RC 200","rc390|KTM RC 390","200|KTM 200","390|KTM 390"];
			
		}
		else if(s1.value=="harley"){
			var optionArray=["roadster|Roadster","custom|1200 Custom","forty|Forty Elight","streetrod|Street Rod","iron883|Iron 883"];
		}
		else if(s1.value=="royal"){
			var optionArray=["classic350|Classic 350","bullet350|Bullet 350","thunderbird|Thunderbird","classic500|Classic 500"];
		}
		else if(s1.value=="bmw"){
			var optionArray=["f750|F 750","f850|F 850","rnine|R Nine T Racer","st1000|ST 1000"];
		}
		else if(s1.value=="yamaha"){
		var optionArray=["fazer|Fazer","fz|FZ 200","rayzr|Ray ZR","facino|Facino"];
		}
		for(var option in optionArray)
		{
			var pair=optionArray[option].split("|");
			var newOption = document.createElement("option");
		    newOption.value = pair[0];
		    newOption.innerHTML = pair[1];
		    s2.options.add(newOption);
		}
} 

</script>
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
.info select{
	border:1px solid #4CAF50;
	border-radius:5px;
	margin-left:20px;
	width:200px;
	height:25px;
}
.vin{
	border:1px solid #4CAF50;
	border-radius:5px;
	width:300px;
	height:25px;
	margin-left:20px;
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
<li><a href="insure1.php">INSURENSE STATUS</a></li>
<li><a href="pllu2.php">POLLUTION STATUS</a></li>
<li><a href="download.php">DOWNLOAD FORMS</a></li>
<li><a href="faq.php">FAQ</a></li>
</ul>
</div>
<div class="info">
<h3 class="head">Your Welcome </h3></br>
<p>Please Provide Some Information Of Your Vehicle   </p></br></br>
<form action="bike2.php" method="post">
<p>Select Your Company : </p>
<select id="company" name="company" onchange="populate(this.id,'model')">
<option>Company</option>
<option value="duke">Duke</option>
<option value="harley">Harley Devidson</option>
<option value="royal">Royal Enfield</option>
<option value="bmw">BMW</option>
<option value="yamaha">Yamaha</option>
</select></br></br>
<p>Select Your Model : </p>
<select id="model" name="model">
<option>Model</option>
</select></br></br>
<p>Enter Vehicle Chassis No. :</p>
<p style="opacity:0.5">(e.g. 600132CTZP78900)</p>
<input type="text" name="chessis" placeholder="CHESSIS NO." class="vin"/></br></br>
<p>Enter Your Vehicle Engine No. :</p>
<p style="opacity:0.5">(e.g. 6U90000BB41202329)</p>
<input type="text" name="vin" placeholder="ENGINE NO." class="vin"/></br></br>
<input type="submit" name="submit" value="Next" class="submit"/>
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
if(isset($_POST['submit'])){
	$company=$_POST['company'];
	$model=$_POST['model'];
	$chessis=$_POST['chessis'];
	$engine=$_POST['vin'];
	$len=strlen($engine);
	$user=$_SESSION['username'];
	if($len==17){
		$query="INSERT INTO vehicle_bike(username,company,model,number_plate,chessis,engine) VALUES('$user','$company','$model',' ','$chessis','$engine')";
		$res=mysqli_query($con,$query);
		if($res)
		{
			$_SESSION['bike']='bike';
		echo'<script>window.location="number_bike.php";</script>';
		}
		else{
			echo 'retry';
		}
	}
	else{
		echo '<script type="text/javascript">alert("Please enter a valid vin number")</script>';
	}
}
?>