<?php 
$n=$_REQUEST['n'];
$e=$_REQUEST['e'];
$p=$_REQUEST['p'];
$c=$_REQUEST['c'];
$m=$_REQUEST['m'];

include "config.php";
$q="insert into `register`(`Name`,`Email`,`Password`,`PhoneNo`,`Address`)values('$n','$e','$p','$c','$m')";
$r=mysqli_query($con,$q);

if($r>0){
    header('location: login.php');
}
else
{
    echo "not";
}
?>