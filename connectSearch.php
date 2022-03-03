<?php
$output = NULL;

if(isset($_POST['submit'])){
     require("connect (1).php"); 
    $search =$db->real_escape_string($_POST['search']);
    
    $resultSet = $db->query("SELECT * FROM staff_details WHERE EPF='$EPF'");
    
    if($resultSet->num_rows>0){
//        while($rows= $resultSet->fetch_assoc())
    //    {
           
//        }
    }else{
        $output = "No results";
    }
}
?>