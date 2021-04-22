<?php
session_start();
 include "config.php";

$ID=$_SESSION['id'];

if (isset($_POST['submit'])) 
{
  
  $company=$_POST['company'];
   $sqli="SELECT * FROM company WHERE id='$company'";

    $getsql=mysqli_query($con,$sqli);
    $row=mysqli_fetch_array($getsql);
    $data=$row['comapny'];
     
  $name=$_POST['name'];
  $sqlii="SELECT * FROM employees WHERE id='$name'";

    $getsqli=mysqli_query($con,$sqlii);
    $rows=mysqli_fetch_array($getsqli);
    $datas=$rows['emp_name'];

  $email=$_POST['email'];
  $number=$_POST['number'];
  $gender=$_POST['gen'];
  $address=$_POST['address'];
  $target = "upload/"; 
  $target = $target . basename( $_FILES['photo']['name']); 

//This gets all the other information from the form 
$pic = ($_FILES['photo']['name']); 

//Writes the photo to the server 
move_uploaded_file($_FILES["photo"]["tmp_name"],"upload/". $_FILES["photo"]["name"]);         
    $pic=$_FILES["photo"]["name"];


$data="UPDATE iihemp SET company='$data',name='$datas',email='$email',numbers='$number',gender='$gender',address='$address',image='$pic' WHERE id='$ID'";

    if(mysqli_query($con,$data)){

      header("Location:home.php");
    }

    else {
    echo "Error: " . $data . "
" . mysqli_error($con);
   }
}

?>