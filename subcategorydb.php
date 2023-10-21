<?php

$ca=$_REQUEST['ca'];
$d=$_REQUEST['d'];
$t=$_REQUEST['t'];
$c=$_REQUEST['c'];
$in=$_FILES['i']['name'];
$it=$_FILES['i']['tmp_name'];
$de=$_REQUEST['de'];


include"config.php";
$query="insert into`subcategory`(`cid`,`dance_style`,`type`,`cost`,`image`,`description`)values('$ca','$d','$t','$c','$in','$de')";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	move_uploaded_file($it, "upload/".$in);
	header('location:subcategory.php');

}else{
	echo"not";
	echo mysqli_error($con);
}