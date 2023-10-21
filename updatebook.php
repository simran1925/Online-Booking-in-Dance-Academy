<?php
$n=$_REQUEST['n'];
$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
$a=$_REQUEST['a'];
$d=$_REQUEST['d'];
$s=$_REQUEST['s'];
$st=$_REQUEST['st'];

$con=mysqli_connect("localhost","root","","dance_academy");
$query="update `book` set name='$n',email='$e',phone='$p',address='$a',duration='$d',subcategory_id='$s',status='$st'";
$result=mysqli_query($con,$query);
if ($result>0){
//echo"inserted";
	
	header('location:viewbook.php');

}else{
	echo"not";
	echo mysqli_error($con);
}