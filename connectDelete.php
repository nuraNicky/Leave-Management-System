<?php
    
    
    
    if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect (1).php"); 
	$EPF = $_POST['EPF'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $designation=$_POST['designation'];
    $department = $_POST['department'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];

    $query="delete * from staff_details where EPF = '$EPF'";

   if($stmt = mysqli_prepare($db, $query)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $EPF);
        
        // Set parameters
        $EPF = trim($_POST["EPF"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: addLec.php");
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    $db->close();
       
}
?>