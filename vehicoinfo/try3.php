<?php 
$con=@mysqli_connect('localhost','root','') or die('not connected');
    @mysqli_select_db($con,'neeraj') or die('not connect to database');
	
$q="select * from try where b='neeraj'";
$res=mysqli_query($con,$q);
$res1=mysqli_num_rows($res);
if($res1>=1)
{
$row=mysqli_fetch_assoc($res);
echo $row['b'];
}
else{
	echo 'retry';
}
?>