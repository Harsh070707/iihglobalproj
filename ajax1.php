<?php
include "config.php";

if(isset($_POST['id'])){

	$id=$_POST['id'];

	$sql="SELECT * FROM employees WHERE emp_comp_id='$id'";
	$getemp=mysqli_query($con,$sql);
	while ($sqli=mysqli_fetch_array($getemp)) {
		$id=$sqli['id'];
		$employee=$sqli['emp_name'];

		echo "<option value='$id'>$employee</option>";
	}
}

?>