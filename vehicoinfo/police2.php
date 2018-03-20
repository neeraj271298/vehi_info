<?php session_start();
 ?>
<html>
<head>
<style>
*{
 margin:0px;
 padding:0px;
}
.panel{
	height:100px;
	background-color:#5f5f5f;
}
.panel h1{
	font-size:50px;
	font-family:verdana;
	text-align:center;
	padding-top:20px;
}
.body{
	margin-left:550px;
	margin-top:100px;
	height:300px;
	width:600px;
	border:1px solid black;
    border-radius:5px;
}
.body h3{
	font-size:25px;
	text-align:center;
	background-color:#5f5f5f;
	color:#f1f1f1;
	border-bottom:1px solid black;
	border-radius:5px;
}

.search{
	height:25px;
	width:300px;
	margin-left:100px;
	border:1px solid #5f5f5f;
	margin-top:10px;
	border-radius:5px;
}
.submit{
	border-radius:5px;
	border:1px solid black;
	background-color:#5f5f5f;
	color:#f1f1f1;
	width:100px;
	margin-top:30px;
	margin-left:200px;
	height:20px;
}
.body select{
	height:25px;
	width:300px;
	margin-left:100px;
	border:1px solid #5f5f5f;
	margin-top:50px;
	border-radius:5px;
}
.copy{
	margin-left:400px;
}
.dis{
	color:red;
	margin-top:100px;
}
.line{
	margin-top:100px;
}
</style>
</head>
<body>
<div class="panel">
<h1>POLICE PANEL</h1>
</div>

<div class="body">
<h3>SEARCH PANEL</h3>
<form action="police2.php" method="post">
<select class="" name="base">
<option value="bike">BIKE</option>
<option value="car">CAR</option>
<option value="truck">TRUCK</option>
<option value="bus">BUS</option>
</select></br></br>
<input type="search" class="search" name="search" Placeholder="ENTER THE NO. " /></br>
<input type="submit" class="submit" name="submit" value="submit" />
</form>
</div>

<form action="police2.php" method="post">
<input type="submit" name="sub" />
</form>
<div class="bottom">
<hr class="line">
<span class="copy">Copyright</span>&copy;2018, VEHICOINFO. All Rights Reserved. This site is designed, developed and Hosted by NEERAJ.</br></br></br>
<span class="dis">Discliamer</span>:Disclaimer: The contents of this web site are supposed to provide quick and easy access of information related to vehicles. Various government agencies and the citizens of the country will be
 benefited from this Web Site. We are taking every precaution to provide accurate and updated information of vehicles available in the Central Repository. However, the details available at the site, may 
 not be up to date due to failure of Network link between Transport Offices and State Data Centre. Hence, we do not assume any legal liability on the completeness, accuracy or usefulness of the 
 contents provided on this web site. We welcome your suggestions to improve our site and request that any error found may kindly be brought to our notice. 
 Thanks for visiting our site. For any query regarding this website please visit 

</div>
</body>
</html>
<?php 
if(isset($_POST['submit']))
{
	$base=$_POST['base'];
	$database="vehicle_".$base;
	$no=$_POST['search'];
	$con=@mysqli_connect('localhost','root','') or die('not connected');
  @mysqli_select_db($con,'neeraj') or die('not connect to database');
  $q="SELECT * FROM $database where number_plate='$no'";
  $res=mysqli_query($con,$q);
  $res1=mysqli_num_rows($res);
  if($res1>=1)
  {
	  $row=mysqli_fetch_assoc($res);
	  $_SESSION['username']=$row['username'];
	  echo "<script>window.location='police3.php';</script>";
	  
  }
  else{
	  echo 'retry';
  }

}
if(isset($_POST['sub'])){
	session_unset();
}
?>