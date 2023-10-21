<?php
session_start();
//get value from form

$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
//database
//hostname,username,password,db
include"config.php";

//table with query
$query="select * from `admin_login`where email='$e'and password='$p'";

//join
$result=mysqli_query($con,$query);
if($array=mysqli_fetch_array($result)){
	$_SESSION['email']=$e;
    $_SESSION['name']=$array['name'];
header('location:category.php');


}else{
	//echo"not";
	echo mysqli_error($con);
}