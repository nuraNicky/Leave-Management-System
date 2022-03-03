<?php

if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect (1).php"); 
	$EPF = $_POST['EPF No'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $designation=$_POST['designation'];
    $department = $_POST['department'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    
    $query="UPDATE staff_details SET  'name'='$name', 'city'='$city', 'designation'='$designation', 'department'='$department', 'email'='$email', 'mobile'='$mobile', 'address'='$address' WHERE 'EPF No.'='$EPF'";
    
   // $result = mysqli_query($connect, $query);

 
       if($db->query($query)){
        echo 'addLec.php';
    }
    else{
        echo "Error: ". $query ."<br>". $db->error;
    }
    $db->close();
       
       

}



?>