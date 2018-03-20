<?php 
if(!isset($_COOKIE['dat']))
{ echo hello;
	$t=time();
$date=date("Y-m-d",$t);
setcookie('dat','$date',time()+10);
}
else{
	echo 'not';
}
?>