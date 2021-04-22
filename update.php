<!DOCTYPE html>

<?php

session_start();

 include "config.php";

$ID=$_GET['id'];

$_SESSION['id']=$ID;

$sql="SELECT * FROM iihemp WHERE id=$ID";
$get=mysqli_query($con,$sql);

$data=mysqli_fetch_array($get);
  $company=$data['company'];
  $name=$data['name'];
  $email=$data['email'];
  $number=$data['numbers'];
  $gender=$data['gender'];
  $address=$data['address'];

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

         $('#company').on('change',function(){
              var companyid =$(this).val();
              $.ajax({

               method:"POST",
               url:"ajax1.php",
               data:{id:companyid},
               success:function(data){
                  $('#name').html(data);
               }
              });

         });



    $("#display").click(function() {                

      $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "show.php",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});


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

<h1>Employee Form Updation</h1>

<form action="updates.php" method="post" id="form" enctype="multipart/form-data">
   

<select name="company" value="<?php echo $company ?>" id="company" required>
   <option value="">Select Company</option>

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


<select name="name" value="<?php echo $name ?>" id="name" required>
   <option value="">Select Employee</option>
</select>
   <br>
<input type="text" name="email" value="<?php echo $email ?>" placeholder="Email">
   <br>
<input type="text" name="number" value="<?php echo $number ?>" placeholder="Mobile No">

   <br>

<select id="gender" name="gen" value="<?php echo $gender ?>">
   
   <option value="Male">Male</option>
   <option value="Female">Female</option>

</select>
   <br>

<input type="text" name="address" value="<?php echo $address ?>" placeholder="Address" required>
   <br>

<input type="file" id="inputImage" name="photo">
   <br>

<button type="submit" name="submit">Update Employee Details </button>




</form>
</div>


</body>
</html>