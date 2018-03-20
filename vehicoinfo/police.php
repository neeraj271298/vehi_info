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
	width:400px;
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
.body p{
	font-size:20px;
	font-family:verdana;
	color:#5f5f5f;
	margin-left:10px;
	margin-top:20px;
}
.search{
	height:25px;
	width:300px;
	margin-left:10px;
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
<h3>LOGIN</h3>
<form action="police.php" method="post">
<p>LOGIN</p>
<input type="text" name="login" placeholder="LOGIN" class="search"/>
<p>PASSWORD</p>
<input type="password" name="password" placeholder="PASSWORD" class="search"/>
</br><input type="submit" name="submit" placeholder="SUBMIT" class="submit"/>
</form>
</div>
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
	$login=$_POST['login'];
	$password=$_POST['password'];
	if($login=='neeraj'&&$password=="neeraj"){
		echo "<script>window.location='police2.php';</script>";
	}
	else{
		echo "<script>alert('wrong username & password');</script>";
	}
}
?>