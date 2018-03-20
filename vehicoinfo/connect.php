<?php
$con=@mysqli_connect('localhost','root','') or die('not connected');
@mysqli_select_db($con,'neeraj') or die('not connect to database');
?>