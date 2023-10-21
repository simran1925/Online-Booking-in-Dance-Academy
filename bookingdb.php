<?php
$n=$_REQUEST['n'];
$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
$a=$_REQUEST['a'];
$d=$_REQUEST['d'];



include "config.php";
$query="insert into`book`(`name`,`email`,`phone`,`address`,`duration`)values('$n','$e','$p','$a','$d')";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	header('location:booking.php');

}else{
	echo"not";
	echo mysqli_error($con);
}