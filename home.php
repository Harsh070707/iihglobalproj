<!DOCTYPE html>
<?php include "config.php";

?>


<html>
<head>
 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">

	$(document).ready(function(){
	$('#company').on('change',function(){

		$('#hides').hide();
        
        var companyids= $(this).val();

        $.ajax({
             
             method:"POST",
             url:"complist.php",
             dataType: "html",
             data:{id:companyids},
             success:function(data){
             	$('#compempllist').html(data);

             }
         
        });

	});

	
});

</script>

<style>



	select {
  width: 20rem;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  margin-left: 150px;
  border-radius: 4px;
  box-sizing: border-box;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

button {
 ; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
 
  font-size: 16px;
}

.custom-select {
  position: relative;
  font-family: Arial;
}

</style>

	<title>Lists</title>
</head>
<body>


	<h1  style="color: lightblue;text-align: center">Employee List</h1>




	<select name="company" id="company" required>
	<option value="" id="permhide">Select Company</option>

<?php
$getcomp="SELECT DISTINCT company FROM iihemp ";
$get=mysqli_query($con,$getcomp);
while ($fetchdata=mysqli_fetch_array($get)){
?>
<option value="<?php echo $fetchdata['company']?>"><?php echo $fetchdata['company'] ?></option>

<?php
}

?>
<option value="">All Employees</option>

</select>

<a href="employees.php"><button style="background-color: blue; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-left: 530px; 

" >Add Employee</button></a>

<div style="margin-left: 100px;margin-top: 50px" id="hides">
	<?php
  $getdata="SELECT * FROM iihemp";
  $conque=mysqli_query($con,$getdata);
$count=1;
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

while($data = mysqli_fetch_row($conque))
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
    echo "<td align-center><button ><a href='update.php?id=$data[0]'>Edit</a></button>";
    echo "<td align-center><button ><a href='delete.php?id=$data[0]'>Delete</a></button>";
     
     $count++;
    echo "</tr>";
}
echo "</table>";
?>
 </div>

<div style="margin-left: 100px;margin-top: 50px" id="compempllist"></div>
</body>
</html>