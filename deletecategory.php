<?php
$id=$_REQUEST['id'];

$con=mysqli_connect("localhost","root","","dance_academy");
$query="delete from `category` where id='$id'";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	
	header('location:viewcategory.php');

}else{
	echo"not";
	echo mysqli_error($con);
}