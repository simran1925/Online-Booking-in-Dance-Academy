<?php
$id=$_REQUEST['id'];

$con=mysqli_connect("localhost","root","","dance_academy");
$query="delete from `subcategory` where did='$id'";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	
	header('location:viewsubcategory.php');

}else{
	echo"not";
	echo mysqli_error($con);
}