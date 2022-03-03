<?php

if(isset($_POST['update']))
{
//$user = 'root';
//$pass = '';
//$db = 'leave_management_system';
//
//$db = new mysqli('localhost',$user,$pass,$db);
    
    require("connect (1).php"); 
	$EPF = $_POST['EPF'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $designation=$_POST['designation'];
    $department = $_POST['department'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    
    $query="UPDATE staff_details SET  'name'='".name."', 'city'='".city."', 'designation'='".designation."', 'department'='".department."', 'email'='".email."', 'mobile'='".mobile."', 'address'='".address."' WHERE EPF = '".EPF."'";
    
//    $result = musqli_query($db, $query);
//
// 
//        echo "Your data has been updated";
//    
//   
//    mysqli_close($db);
       if($db->query($query)){
        echo "Your data has been updated";
    }
    else{
        echo "Error: ". $query ."<br>". $db->error;
    }
    $db->close();

}



?>