<?php 
$n=$_REQUEST['n'];
$e=$_REQUEST['e'];
$c=$_REQUEST['c'];
$m=$_REQUEST['m'];

include "config.php";
$q="insert into `contact`(`name`,`email`,`phone`,`message`)values('$n','$e','$c','$m')";
$r=mysqli_query($con,$q);

if($r>0){
    header('location: comment.php');
}
else
{
    echo "not";
}
?>