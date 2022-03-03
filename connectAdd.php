   <?php
    if('POST' == $_SERVER['REQUEST_METHOD']) {
    require("connect (1).php"); 
	$EPF = $_POST['EPF'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $designation=$_POST['designation'];
    $department=$_POST['department'];
    $firstDate=$_POST['firstDate'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];

    $query="insert into staff_details(EPF,name,city,designation,department,firstDate,email,mobile,address,cLeaves,vLeaves,oLeaves)    
values('$EPF','$name','$city','$designation','$department','$firstDate','$email','$mobile','$address',0,0,0)";
//$db->exec($query);
//	echo "Your data has been updated"; 
//}
//catch(PDOException $e) {
// echo '<div class="alert-warning" > ';
//  echo $e->getMessage();
//    }
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

//header('Location:http://localhost/leave/testing.php');
//include_once 'connect(1).php'
//if(isset($_POST['save'])){
//    $epf = $_POST['EPF'];
//    $name=$_POST['name'];
//    $city=$_POST['city'];
//    $designation=$_POST['designation'];
//    $department = $_POST['department'];
//    $email=$_POST['email'];
//    $telephone=$_POST['mobile'];
//    $homeadd=$_POST['address'];
//    
//    $sql="insert into staff_details (EPF,name,city,designation,department,email,mobile,address)    
//values('$epf','$name','$city','$designation','$department','$email','$telephone','$homeadd')";
//    
//    if(mysqli_query($conn,$sql)){
//        echo "New record added";
//    }else{
//        echo "Error: ". $sql . "<br>" . mysqli_error($conn); 
//    }
//    mysqli_close($conn);
//}
//







//    $epf =filter_input(INPUT_POST,'EPF');
//    $name=filter_input(INPUT_POST,'name');
//    $city=filter_input(INPUT_POST,'city');
//    $designation=filter_input(INPUT_POST,'designation');
//    $department =filter_input(INPUT_POST,'department');
//    $email=filter_input(INPUT_POST,'email');
//    $telephone=filter_input(INPUT_POST,'mobile');
//    $homeadd=filter_input(INPUT_POST,'address');
//
//if(!empty($epf)){
//if(!empty($name)){
//if(!empty($city)){
//if(!empty($designation)){
//if(!empty($department)){
//if(!empty($email)){
//if(!empty($telephone)){
//if(!empty($homeadd)){
//
//    $host="localhost";
//    $dbusername="root";
//    $dbpassword="";
//    $dbname="leave_management_system"
//        
//$conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);
//    if(!$conn){
//        die("Connect Error: ".mysqli_connect_error());
//    }
//    else
//        $sql="INSERT INTO staff_details(EPF,name,city,designation,department,email,mobile,address)    
//values('$epf','$name','$city','$designation','$department','$email','$telephone','$homeadd')";
//    if($conn->query($sql)){
//        echo "Your data has been updated";
//    }
//    else{
//        echo "Error: ". $sql ."<br>". $conn->error;
//    }
//    $conn->close();
//    
//}}}}}}}}else{echo " Anyone should not be empty";
//        }
    ?>