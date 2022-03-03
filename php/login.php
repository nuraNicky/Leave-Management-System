<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'connection.php';

global $connection;

$uname = $_GET['name'];
$pword = $_GET['pword'];

$sql = "select * from login where uname='$uname' AND pword='$pword'";

$result=  mysqli_query($connection, $sql);

if (mysqli_num_rows($result)>0) {
    echo 'ok';
}  else {
    echo 'error';
}
 
