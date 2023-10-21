<?php
$n=$_REQUEST['n'];
$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
$a=$_REQUEST['a'];
$d=$_REQUEST['d'];
$s=$_REQUEST['s'];
$st=$_REQUEST['st'];

include"config.php";
$query="update `book`  category='$n','$e','$p','$a','$d','$s','$st',";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	
	echo"<script>window.('location.assign('viewbook.php?x=1')</script>";

}else{
	echo"not";
	echo mysqli_error($con);
	echo"<script>window.('location.assign('viewbook.php?x=0')</script>";
}