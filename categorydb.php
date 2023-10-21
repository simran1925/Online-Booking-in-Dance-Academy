<?php
$c=$_REQUEST['c'];
include"config.php";
$query="insert into`category`(`category`)values('$c')";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	
	header('location:category.php');

}else{
	echo"not";
	echo mysqli_error($con);
}