<?php

require('connect (1).php');

session_start();

$sql = "SELECT * from staff_details where epf ='" . $_SESSION['epf'] . "'";

$result = $db->query($sql);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {

        $epf = $row['EPF'];
        $name = $row['name'];
        $designation = $row['designation'];
        $department = $row['department'];

        $cLeaves = $row['cLeaves'];
        $vLeaves = $row['vLeaves'];
        $oLeaves = $row['oLeaves'];

        $cLeavesRemaining = 20 - $row['cLeaves'];
        $vLeavesRemaining = 20 - $row['vLeaves'];
        $oLeavesRemaining = 20 - $row['oLeaves'];
    }
} else {
    echo '0 results';
    echo '<br>';
}

?>

<html>

<head>

    <meta charset='UTF-8'>
    <title>My Profile</title>

    <link rel='stylesheet' type='text/css' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
    <link href='css/login.css' rel='stylesheet' type='text/css' />
    <style>
        th,
        td {
            padding: 15px;
        }

        #tb1 {
            margin-left: auto;
            margin-right: auto;
            border: solid;
            font-family: sans-serif;
            font-size: 20px;
        }

        #can,
        #app {
            font-size: 25px;
        }

        .confirm {
            position: absolute;
            left: 80%;
            padding: 10px 20px;
            font-size: 25px;
        }

        .confirm:hover {
            transition: .4s;
            color: #30afaa;
        }

        h2 {
            padding-top: 30px;
            margin-left: 50px;
            margin-right: 50px;
            font-family: sans-serif;
            font-size: 50px;
            padding-bottom: 30px;
            background-color: darkcyan;
            padding-left: 60;
        }

        #epf {
            margin-left: 170px;
        }

        body {
            font-family: sans-serif;
            font-size: 30px;
        }

        #epft {
            background-color: #ccc8c8;
        }
    </style>
</head>

<body>
    <h2> My Profile</h2>

    <table border='1' style='width:60%' id='tb1'>

        <br><br>

        <div class='wrapper fadeInDown'>
            <div id='formContent'>

                <tr>
                    <th>EPF No: </th>
                    <td> <?php echo $epf ?></td>
                </tr>
                <tr>
                    <th>Full name: </th>
                    <td> <?php echo $name ?></td>
                </tr>
                <tr>
                    <th>Designation: </th>
                    <td> <?php echo $designation ?></td>
                </tr>
                <tr>
                    <th>Department: </th>
                    <td> <?php echo $department ?></td>
                </tr>
                <tr>
                    <th>Leave details: </th>
                    <td>
                        <table>
                            <tr>
                                <th> leave categories </th>
                                <td>c</td>
                                <td>v</td>
                                <td>o</td>
                            </tr>
                            <tr>
                                <th>No. of all leaves:-</th>
                                <td style='width:10%'> <input type='text' style='width:60%' value='20'></td>
                                <td style='width:10%'> <input type='text' style='width:60%' value='20'></td>
                                <td style='width:10%'> <input type='text' style='width:60%' value='20'></td>
                            </tr>
                            <tr>
                                <th>No. of all taken leaves:-</th>
                                <td style='width:10%'> <input type='text' style='width:60%' value="<?php echo $cLeaves ?>"></td>
                                <td style='width:10%'> <input type='text' style='width:60%' value="<?php echo $vLeaves ?>"></td>
                                <td style='width:10%'> <input type='text' style='width:60%' value="<?php echo $oLeaves ?>"></td>
                            </tr>
                            <tr>
                                <th>No. of all balanced leaves:-</th>
                                <td style='width:10%'> <input type='text' style='width:60%' value="<?php echo $cLeavesRemaining ?>"> </td>
                                <td style='width:10%'> <input type='text' style='width:60%' value="<?php echo $vLeavesRemaining ?>"> </td>
                                <td style='width:10%'> <input type='text' style='width:60%' value="<?php echo $oLeavesRemaining ?>"> </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </div>
        </div>
    </table>

    <center>
        <br>
        <button type='button' class='btn btn-info' id='can'>Back</button>
    </center>

</body>

</html>