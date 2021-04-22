<?php

include_once 'config.php';

$ID=$_GET['id'];


 
$sql="DELETE FROM iihemp WHERE id=$ID";

if(mysqli_query($con,$sql)){
    	header("Location:home.php");
    }
    else{
    	echo "its not deleted";
    }
?>
