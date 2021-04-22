<?php
error_reporting(0);
include "config.php";

if(isset($_POST['id'])){

$count=1;

	$id=$_POST['id'];
	$sql="SELECT * FROM iihemp WHERE company='$id'";
    $getemp=mysqli_query($con,$sql);
    $sqli=mysqli_fetch_array($getemp);
     $company=$sqli['company'];
$sqli="SELECT * FROM iihemp WHERE company LIKE '%{$company}%'";
$getemp=mysqli_query($con,$sqli);


echo "<table border='1' >
<tr>
<td align=center> <b>Id</b></td>
<td align=center><b>Company</b></td>
<td align=center><b>Employee Name</b></td>
<td align=center><b>Email</b></td></td>
<td align=center><b>Phone no.</b></td>
<td align=center><b>Gender</b></td>
<td align=center><b>Address</b></td>
<td align=center><b>Image</b></td>
<td align=center><b>Edit Employee</b></td>
<td align=center><b>Delete Employee</b></td>

";

while($data = mysqli_fetch_row($getemp))
{   
    echo "<tr>";
    echo "<td align=center>$count</td>";
    echo "<td align=center>$data[1]</td>";
    echo "<td align=center>$data[2]</td>";
    echo "<td align=center>$data[3]</td>";
    echo "<td align=center>$data[4]</td>";
    echo "<td align=center>$data[5]</td>";
    echo "<td align=center>$data[6]</td>";
    // echo "<td align=center>$data[7]</td>";
    echo "<td align=center><img src='upload/$data[7]''width=40px height=40px'/></td>";
    echo "<td align-center><button><a href='update.php?id=$data[0]'>Edit</a></button>";
    echo "<td align-center><button ><a href='delete.php?id=$data[0]'>Delete</a></button>";
     
     $count++;
    echo "</tr>";
}
echo "</table>";
}

?>