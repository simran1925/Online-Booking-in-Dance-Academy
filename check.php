<?php
session_start();
//get value from form

$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
//database
//hostname,username,password,db
include "config.php";

//table with query
$query="select * from `register` where Email='$e'and Password='$p'";

//join
$result=mysqli_query($con,$query);
if($array=mysqli_fetch_array($result)){
	$_SESSION['Email']=$e;
$_SESSION['Name']=$array['Name'];
//header('location:dashboard.php');
echo "<script>window.location.assign('about.php')</script>";


}else{
	//echo"not";
	//echo mysqli_error($con);
	echo "<script>window.location.assign('login.php')</script>";

}