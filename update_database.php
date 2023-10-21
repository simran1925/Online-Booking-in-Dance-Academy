<?php
$c=$_REQUEST['c'];
include"config.php";
$query="update `category`  category='$c'";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	
	echo"<script>window.('location.assign('viewcategory.php?x=1')</script>";

}else{
	echo"not";
	echo mysqli_error($con);
	echo"<script>window.('location.assign('viewcategory.php?x=0')</script>";
}