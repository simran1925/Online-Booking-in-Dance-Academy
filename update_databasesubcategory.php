<?php
$d=$_REQUEST['cid'];

$d=$_REQUEST['d'];
$t=$_REQUEST['t'];
$c=$_REQUEST['c'];
$i=$_REQUEST['i'];
$de=$_REQUEST['de'];


include"config.php";
$query="update `subcategory`  subcategory='$cid','$d','$t','$c','$i','$de',";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	
	echo"<script>window.('location.assign('viewsubcategory.php?x=1')</script>";

}else{
	echo"not";
	echo mysqli_error($con);
	echo"<script>window.('location.assign('viewsubcategory.php?x=0')</script>";
}