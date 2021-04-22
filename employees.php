<!DOCTYPE html>

<?php include "config.php";
?>
<html>
<head>
	<style type="text/css">
input[type=text], select {
  width: 20rem;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

button{
width: 20rem;
border-radius: 4px;
padding: 12px 20px;
background-color: green;
}
   </style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

// 			$('#company').on('change',function(){
//               var companyid =$(this).val();
//               $.ajax({

//               	method:"POST",
//               	url:"ajax1.php",
//               	data:{id:companyid},
//               	success:function(data){
//               		$('#name').html(data);
//               	}
//               });

// 			});



//     $("#display").click(function() {                

//       $.ajax({    //create an ajax request to display.php
//         type: "GET",
//         url: "show.php",             
//         dataType: "html",   //expect html to be returned                
//         success: function(response){                    
//           var tog =  $("#responsecontainer").html(response);
//           $(tog).toggle(); 
//             //alert(response);
//         }

//     });
// });



$("#form").validate({
  rules: {
    number:{ 
required: true,
minlength: 10,
maxlength: 10
},
    email: {
      required: true,
      email: true
    }
  },
  messages: {
    number:{
    required: "Please specify your contact number"

   },
    email: {
      required: "We need your email address to contact you",
      email: "Your email address must be in the format of name@domain.com"
    }
}
});

});
		


	</script>


	<title>Employee Listing</title>
</head>
<body>

<div style="margin-left: 500px;">

<h1>Employee Form</h1>




<form action="insert.php" method="post" id="form" enctype="multipart/form-data">
	

<select name="company" id="company" required>
	<option value="0">Select Company</option>

<?php
$getcomp="SELECT * FROM company";
$get=mysqli_query($con,$getcomp);
while ($fetchdata=mysqli_fetch_array($get)){
?>
<option value="<?php echo $fetchdata['id']?>"><?php echo $fetchdata['comapny'] ?></option>
<?php
}
?>

</select>

   <br>


<!-- <select name="name" id="name" required>
	<option value="">Select Employee</option>
</select> -->
<input type="text" name="name" placeholder="Employee Name" required>
   <br>
<input type="text" name="email" placeholder="Email">
   <br>
<input type="text" name="number" placeholder="Mobile No">

   <br>

<select id="gender" name="gen">
	
	<option value="Male">Male</option>
	<option value="Female">Female</option>

</select>
   <br>

<input type="text" name="address" placeholder="Address" required>
   <br>

<input type="file" id="inputImage" name="photo">
   <br>

<button type="submit" name="submit">Add Employee</button>




</form>
</div>
<a href="home.php"><button style="background-color: blue; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;

  font-size: 16px;
  margin-left: 500px; 

" >Lists of Employee <strong>- ></strong></button></a>

<!-- <h3 align="center">Employee Details</h3>
<table border="1" align="center">
   <tr>
       <td> <input type="button" id="display" value="Display All Data" /> </td>
   </tr>
</table>
<div id="responsecontainer" align="center">

</div> -->
</body>
</html>