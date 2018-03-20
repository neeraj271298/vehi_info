<?php session_start();
 echo $user=$_SESSION['username'];
 $con=@mysqli_connect('localhost','root','') or die('not connected');
  @mysqli_select_db($con,'neeraj') or die('not connect to database');

	  $q1="SELECT * FROM vehi_add where username='$user'";
	  $res=mysqli_query($con,$q1);
	  $res1=mysqli_num_rows($res);
	  if($res1>=1)
	  {
	     $row1=mysqli_fetch_assoc($res);
		 $name=$row1['username'];
		 $add=$row1['address'];
		 $district=$row1['district'];
		 $state=$row1['state'];
		 $aadhar=$row1['aadhaar'];
		 $pan=$row1['pan'];
	  }
	  else{
		  echo "<script>alert('no record found');</script>";
	  }
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
	height:400px;
	width:400px;
	border:1px solid black;
    border-radius:5px;
}



.sub{
	border-radius:5px;
	border:1px solid black;
	background-color:#5f5f5f;
	color:#f1f1f1;
	width:100px;
	margin-top:30px;
	margin-left:150px;
	height:20px;
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
<label>NAME: </label><?php echo $name;?></br>
<label>ADDRESS: </label><?php echo $add;?></br>
<label>DISTRICT: </label><?php echo $district;?></br>
<label>STATE: </label><?php echo $state;?></br>
<label>AADHAAR: </label><?php echo $aadhar;?></br>
<label>PAN: </label><?php echo $pan;?></br>
</div>
<form action="police2.php" method="post">
<input type="submit" name="sub" class="sub" value="NEW SEA"/>
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
<?php if(isset($_POST['sub'])){
	session_unset();
}
?>