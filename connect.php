<?php


//$dbname = new PDO('mysql:host=localhost;dbname=leave_management_system; charset=utf8', 'root', '', array(PDO::ATTR_EMULATE_PREPARES => false, 

$host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="leave_management_system"
        
$conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);
    if(!$conn){
        die("Connect Error: ".mysqli_connect_error());
    }
?>