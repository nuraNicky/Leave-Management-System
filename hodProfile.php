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
  <meta charset="UTF-8">
  <title>My Profile</title>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="css/login.css" rel="stylesheet" type="text/css" />
  <style>
    * {
      font-size: 30px;
    }

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

    /*position: absolute;
                left: 80%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
            #app{
                position: absolute;
                left: 85%;
                -ms-transform: translate(-50%, -50%);
                transform: translate(-50%, -50%);
            }
    */
    .confirm {
      position: absolute;
      left: 80%;
      padding: 10px 20px;
      font-size: 25px;
      /* border: 1px solid rgba(47, 85, 69, 0.5);*/
    }

    .confirm:hover {
      /*            background-color:antiquewhite;*/
      transition: .4s;
      color: #30afaa;
    }

    h2 {
      /*                top: 100px;*/
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
      margin-top: 50px;
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

  <div class="wrapper fadeInDown">
    <div id="formContent">

      <table border="1" style="width:60%" id="tb1">

        <tr>
          <th>Full name: </th>
          <td> </td>
        </tr>

        <tr>
          <th>Leave details: </th>
          <td>
            <table>
              <tr>
                <th>No. of all leaves:-</th>
                <td style="width:50%"> <input type="text" style="width:100%"> </td>
              </tr>
              <tr>
                <th>No. of all taken leaves:-</th>
                <td style="width:50%"> <input type="text" style="width:100%" "align:center"> </td>
              </tr>
              <tr>
                <th>No. of all balanced leaves:-</th>
                <td style="width:50%"> <input type="text" style="width:100%"> </td>
              </tr>

            </table>
          </td>
        </tr>
      </table>
      <div class="confirm">
        <button type="button" class="btn btn-info" id="can">Back</button>
      </div>
    </div>
  </div>

</body>

</html>