<?php

include 'connect (1).php';

$sql = 'SELECT count(staff_details.epf) as epfCount FROM staff_details';

$result = $db->query( $sql );

if ( $result->num_rows > 0 ) {

    if ( $row = $result->fetch_assoc() ) {
        $epfCount = $row['epfCount'];
    }

} else {
    echo '0 results';
    echo '<br>';
}

?>

<html>
    <head>
    <style>
        body{
            background-color: dimgray;
        }
        table{
            padding-left: 20px;
            padding-right: 20px;
            background-color: aliceblue;
            border-style: hidden;
        }
        th,td{
            text-align: center;
        }
        th{
            background-color: darkgray;
            height: 40px;
        }
        td{
            height: 20px;
        }
        
        </style>
    </head>
<body>
    <main role = 'main'>
 <table border = "1" style="width:100%">
       <tr><th style="width:05px">EPF No.</th><th style="width:05px">Full name</th><th style="width:05px">City</th><th style="width:05px">Designation</th><th style="width:05px">Department</th><th style="width:05px">Date of first Appoinment</th><th style="width:05px">Email</th><th style="width:05px">Phone number</th><th style="width:05px">Home Address</th><th style="width:05px">For More Details</th></tr>
        </table>
<?php

for ( $i = 0; $i< $epfCount; $i++ ) {
    
    $i1 = $i + 1;

    $sql = "SELECT staff_details.name as name, staff_details.EPF as EPF, staff_details.city as city, staff_details.designation as designation, staff_details.department as department, staff_details.firstDate as firstDate, staff_details.email as email, staff_details.mobile as mobile, staff_details.address as address FROM staff_details order by staff_details.EPF asc limit $i1 OFFSET $i";
    
    $result = $db->query( $sql );

    if ( $result->num_rows > 0 ) {

        if ( $row = $result->fetch_assoc() ) {
            $EPF = $row['EPF'];             
            $name = $row['name'];
            $city = $row['city'];           
            $designation = $row['designation'];            
            $department = $row['department'];
            $firstDate = $row['firstDate'];           
            $email = $row['email'];            
            $mobile = $row['mobile'];
            $address = $row['address'];           


        }

    } else {
        echo '<br>';

        echo '0 results';
        echo '<br>';
    }

    ?>
   <div class = 'container'>
      <table border = "1" style="width:100%">
        <tr><td style="width:20px"><?php echo $EPF ?></td><td style="width:05px"><?php echo $name ?></td><td style="width:05px"><?php echo $city ?></td><td style="width:05px"><?php echo $designation ?></td><td style="width:05px"><?php echo $department ?></td><td style="width:05px"><?php echo $firstDate ?></td><td style="width:05px"><?php echo $email ?></td><td style="width:05px"><?php echo $mobile ?></td><td style="width:05px"><?php echo $address ?></td><td style="width:05px"><button>more</button></td></tr>
     
       </table>
        </div>
        <?php
}
?>
    
    </main>
    
    
    
    
    </body>


</html>