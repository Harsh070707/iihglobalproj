<?php

$server='localhost';
$username='root';
$password='';
$db='employeeinfo';

$con=mysqli_connect($server,$username,$password,"$db");

if(!$con){

	echo 'connection is failed';
}
?>