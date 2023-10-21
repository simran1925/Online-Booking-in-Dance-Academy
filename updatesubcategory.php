<?php
$cid=$_REQUEST['cid'];
$id=$_REQUEST['id'];
$d=$_REQUEST['d'];
$t=$_REQUEST['t'];
$c=$_REQUEST['c'];
$in=$_FILES['i']['name'];
$it=$_FILES['i']['tmp_name'];
$de=$_REQUEST['de'];

$con=mysqli_connect("localhost","root","","dance_academy");
$query="update `subcategory` set cid='$cid',dance_style='$d',type='$t',cost='$c',image='$in',description='$de' where did='$id'";

$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
move_uploaded_file($it, "upload/".$in);
	 
	header('location:viewsubcategory.php');

}else{
	echo"not";
	echo mysqli_error($con);
}