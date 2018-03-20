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
.form h1{
text-align:center;
	font-size:35px;
	color:#4CAF50;
} 
.form label{
	margin-top:10px;
    margin-left:10px;
	font-size:15px;
	font-family:Arial;
}
.form li{
	margin-left:20px;
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
<h1>IMPORTANT FORMS</h1>
 <h3>Driving License</h3>
 <table>
   <tr><td>Application-cum-decalration as to physical fitness</td><td><a href="https://vahan.nic.in/nrservices/forms/form1.pdf">FORM1</a></td></tr>
   <tr><td>Medical Certificate</td><td><a href="https://vahan.nic.in/nrservices/forms/form1a.pdf">FORM1A</a></td></tr>
   <tr><td>Application for the Grant of Learner's License</td><td><a href="https://vahan.nic.in/nrservices/forms/form2.pdf">FORM2</a></td></tr>
   <tr><td>Application for Licence to Drive</td><td><a href="https://vahan.nic.in/nrservices/forms/form4.pdf">FORM4</a></td></tr>
   <tr><td>Application for the addition of new class of vehicles to a Driving Licence</td><td><a href="https://vahan.nic.in/nrservices/forms/form8.pdf">FORM8</a></td></tr>
   <td>Application for the Renewal of Driving Licence</td><td><a href="https://vahan.nic.in/nrservices/forms/form9.pdf">FORM9</a></td></tr>
 </table>
 </br>
 </br>
 <h3>Vehicle Registration	</h3></br>
 <table>
 <tr><td>Application For Registration of a Motor Vehicle</td><td><a href="https://vahan.nic.in/nrservices/forms/form20.pdf">Form20</a></td></tr>
 <tr><td>Intimation of loss or destruction etc. of the certificate of registration and application
For the issue of Duplicate Certificate Of Registration</td><td><a href="https://vahan.nic.in/nrservices/forms/form26.pdf">Form26</a></td></tr>
<tr><td>Application for Assignment of New Registration Mark</td><td><a href="https://vahan.nic.in/nrservices/forms/form27.pdf">Form27</a></td></tr>
 <tr><td>Application for No Objection Certificate and Grant of Certificate</td><td><a href="https://vahan.nic.in/nrservices/forms/form28.pdf">Form28</a></td></tr>
 <tr><td>Notice of Transfer of Ownership of A Motor Vehicle</td><td><a href="https://vahan.nic.in/nrservices/forms/form29.pdf">Form29</a></td></tr>
 <tr><td>Report of Transfer of Ownership of a Motor Vehicle</td><td><a href="https://vahan.nic.in/nrservices/forms/form30.pdf">Form30</a></td></tr>
 <tr><td>Application for the Transfer of Ownership in the Name of the Person Succeding to the Possession of the Vehicle</td><td><a href="https://vahan.nic.in/nrservices/forms/form31.pdf">Form31</a></td></tr>
 <tr><td>Intimation of change of address to be recorded in the Certificate of Registration</td><td><a href="https://vahan.nic.in/nrservices/forms/form33.pdf">Form33</a></td></tr>
 <tr><td>Application for Making an Entry of an Agreement of Hire-Purchase/Lease/Hypothecation Subsequent to Registration</td><td><a href="https://vahan.nic.in/nrservices/forms/form34.pdf">Form34</a></td></tr>
 <tr><td>Notice of Termination of an Agreement of Hire Purchase /Lease /Hypothecation</td><td><a href="https://vahan.nic.in/nrservices/forms/form35.pdf">Form35</a></td></tr>
<tr><td>Application for issue of a fresh Certificate of Registration in The name of the Financier</td><td><a href="https://vahan.nic.in/nrservices/forms/form36.pdf">Form36</a></td></tr>
<tr><td>Declaration to be filled by a person who does not have Permanent Account Number</td><td><a href="https://vahan.nic.in/nrservices/forms/form60.pdf">Form60</a></td></tr>
 </table>
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