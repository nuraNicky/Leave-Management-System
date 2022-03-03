<?php

$user = 'root';
$pass = '';
$db = 'leave_management_system';

$EPF = "";
$name = "";
$city = "";
$designation = "";
$department = "";
$email = "";
$mobile = "";
$address = "";

$db = new mysqli('localhost',$user,$pass,$db) or die("Unable to connect!!!");

//echo"Connected!!!";
function getPosts(){
    $posts = array();
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['EPF No.'];
    $posts[2] = $_POST['name'];
    $posts[3] = $_POST['city'];
    $posts[4] = $_POST['designation'];
    $posts[5] = $_POST['department'];
    $posts[6] = $_POST['email'];
    $posts[7] = $_POST['mobile'];
    $posts[8] = $_POST['address'];
    return $posts;
}

if(isset($_POST['search'])){
  $data = getPosts();
    
    $searchQuery = "SELECT * FROM staff_details WHERE EPF No. = $EPF";
    
    $search_Result = mysqli_query($connect, $search_Query);
    
    if($search_Result){
        if(mysqli_num_rows($search_Result))
        {
            while($row = mysqli_fetch_array($search_Result))
            {
                
                $EPF= $row['EPF No.'];
                $name = $row['name'];
                $city = $row['city'];
                $designation = $row['designation'];
                $department = $row['department'];
                $email = $row['email'];
                $mobile = $row['mobile'];
                $address = $row['address'];
            }
        }else{
           echo 'No data for this EPF No.' ;
        }
    }else{
        echo 'Result Error';
    }
}

?>

<html>
<head>
    <head>
        <meta charset="UTF-8">
        <title>Add, Update and Delete</title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<!--        <link rel="stylesheet" type="text/css" href="login.css">-->
        <style>
            #fm{
                margin-left: 150px;
                margin-right: 150px;
                border: solid;
                font-size: 20px;
            }
            h2
            {
/*              top: 100px;*/
                padding-top: 30px;
                margin-left: 50px;
                margin-right: 50px;
                font-size: 50px;
                padding-bottom: 30px;
                background-color: darkcyan;
                padding-left: 60;
            }
           
            #fm{
                padding: 50px;
            }
            body{
                font-family: sans-serif;
                font-size: 30px;
            }
             .confirm
            {
                position: absolute;
                left: 75%;
                padding: 10px 20px;
                font-size: 25px;
               /* border: 1px solid rgba(47, 85, 69, 0.5);*/
            }
                .confirm:hover{
/*            background-color:antiquewhite;*/
                transition: .4s;
                color:#30afaa;      
            }
            #sub,#up,#dlt{
            font-size: 25px;
            }
        </style>
       <!-- <script>
            function validateForm(){
            var a=document.forms["myform"]["epf"].value;
            if(a=""){
                alert("EPF Number must be filled out");
                return false;
            }
            var b=document.forms["myform"]["name"].value;
            if(b=""){
                alert("Name must be filled out");
                return false;
            }
            var c=document.forms["myform"]["city"].value;
            if(c=""){
                alert("City must be filled out");
                return false;
            }
            var d=document.forms["myform"]["designation"].value;
            if(d=""){
                alert("Designation must be filled out");
                return false;
            }
            var e=document.forms["myform"]["department"].value;
            if(e=""){
                alert("Department must be filled out");
                return false;
            }
            var f=document.forms["myform"]["email"].value;
            if(f=""){
                alert("Email must be filled out");
                return false;
            }
            var g=document.forms["myform"]["telephone"].value;
            if(g=""){
                alert("telephone Number must be filled out");
                return false;
            }
            var h=document.forms["myform"]["homeadd"].value;
            if(h=""){
                alert("Home Address must be filled out");
                return false;
            }
            
        }
        
        
        function ValidateEmail(inputText) {
            var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (inputText.value.match(mailformat)) {
                document.myform.email.focus();
                return true;
            } else {
                alert("You have entered an invalid email address!");
                document.myform.email.focus();
                return false;
            }
        }
</script> -->
         </head>
    <body>
<!--         <div class="wrapper fadeInDown">-->
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
<!--
                <div class="fadeIn first">
                    <img src="13.jpg" id="icon" alt="User Icon" />
                </div>
-->
        <h2>Add, Update and Delete</h2><br>
                
       <form method="post" action="connectAdd" name="myform" class="needs-validation" novalidate id="fm" >
         
    <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">EPF No:</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" name="EPF" value="<?php echo $EPF?>" >
    <!--<button>Search</button>-->
    <button type="submit" name = "search" class="btn btn-info" id="search">Search</button>
    </div>
    </div>
           <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Full Name</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" name="name" value="<?php echo $name?>" >
    </div>
    </div>

    <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">City</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" name="city" value="<?php echo $city?>" >
    </div>
<!--
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>
-->
    </div>
           
           <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Designation</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" name="designation" value="<?php echo $designation?>" >
    </div>
    </div>
          
<!--
                <div class="form-group row">
      <label for="validationCustom03"  class="col-md-3 mb-3">Department</label>
        <select class="custom-select" id="validationCustom04" required>
        <option selected disabled value="">Choose...</option>
        <option>Computer Engineering</option>
        <option>Software Engineering</option>
        <option>Computer Science</option>
      </select>
    </div>
-->
    
<!--           <div class="col-md-9 mb-3">--><p>
      <label for="validationCustom04">Department</label>
      <input type="text" class="custom-select" id="validationCustom04" name="department" value="<?php echo $department?>" >
        
                </p>
<!--    </div>-->
          
          <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Email Address</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" name="email" >
    </div>
    </div>      
        
            <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Telephone</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" name="mobile" value="<?php echo $mobile?>" >
    </div>
    </div>    
           
              <div class="form-group row">
      <label for="validationCustom03"  class="col-sm-2 col-form-label">Home Address</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="validationCustom03" name="address" value="<?php echo $address?>"value="<?php echo $address?>" >
    </div>
    </div>
           
    
   
<!--  </div>-->
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  
</form>
<div class="confirm">
<!--<input type="submit" value="Submit" name="save" class="btn btn-info" id="sub" >-->
<button type="button" class="btn btn-info" id="sub" name="save" onclick="validateForm(document.myform)">Submit</button>
    
<button type="button" name = "update" class="btn btn-info" id="up">Update</button>
<button type="button" name = "delete" class="btn btn-info" id="dlt">Delete</button>
    
                </div>

        
     

            </div>
<!--        </div>   -->
            </body>

    </head>
</html>