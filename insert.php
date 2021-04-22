<?php
include "config.php";

if (isset($_POST['submit'])) 
{
	
	$company=$_POST['company'];
	 $sqli="SELECT * FROM company WHERE id='$company'";

    $getsql=mysqli_query($con,$sqli);
    $row=mysqli_fetch_array($getsql);
    $data=$row['comapny'];
     
	$name=$_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$gender=$_POST['gen'];
	$address=$_POST['address'];
	$target = "upload/"; 
	$target = $target . basename( $_FILES['photo']['name']); 

//This gets all the other information from the form 
$pic = ($_FILES['photo']['name']); 

//Writes the photo to the server 
$getdire='upload';
if(!file_exists($getdire)){
	mkdir($getdire);
}

move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/". $_FILES["photo"]["name"]);         
    $pic=$_FILES["photo"]["name"];

$datas="INSERT INTO employees(emp_name,emp_comp_id) VALUES('$name','$company')";
mysqli_query($con,$datas);

$data="INSERT INTO iihemp(company,name,email,numbers,gender,address,image) VALUES('$data','$name','$email','$number','$gender','$address','$pic')";

    if(mysqli_query($con,$data)){
    	//header("Location:employees.php");
    	echo"<script>alert('data inserted');window.location='employees.php';</script>";

    }
    else {
		echo "Error: " . $data . "
" . mysqli_error($con);
	 }
}

?>
