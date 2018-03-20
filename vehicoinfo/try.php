<?php
session_start();
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'neeraj');
$user=$_SESSION['name'];
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
		echo $staval." ";
		echo $disval." ";
		$number="11223344556677889900";
	    $number=str_shuffle(str_repeat($number,5));
		echo $number=substr($number,0,4);
	}
	else{
		
		echo 'nalle';
	}
}
else{
	
	echo 'nalle';
}

?>