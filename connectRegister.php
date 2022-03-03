<?php
    if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect (1).php"); 
	
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $password=$_POST['password'];
        
    $query="insert into logiin(email,password,designation)    
values('$email','$password','$designation')";

    if($db->query($query)){
//        echo "Your data has been updated";
        echo "<script>alert('Your data has been updated')</script>";
    
    }
    else{
//        echo "Error: ". $query ."<br>". $db->error;
            echo "<script>alert('Error')</script>";

    }
    $db->close();
}
?>