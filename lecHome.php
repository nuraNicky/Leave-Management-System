<?php

require("connect (1).php");

session_start();

$email = $_GET['email'];

$sql = "SELECT epf from staff_details where email ='" . $email . "'";

$result = $db->query($sql);

if ($result->num_rows > 0) {

  if ($row = $result->fetch_assoc()) {
    $epf = $row['epf'];
    $_SESSION["epf"] = $epf;
  }
} else {
  echo '0 results';
  echo '<br>';
}

?>

<html>

<head>
  <meta charset="UTF-8">
  <title>Lecturer</title>

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="css/login.css" rel="stylesheet" type="text/css" />
  <style>
    #buttons {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    body {
      background-image: url(pic13.jpeg);
      background-color: darkslategrey;
      background-size: 1050px 600px;
    }

    #registerbtn {
      background-color: darkcyan;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
      font-size: 30px;
    }

    .registerbtn:hover {
      opacity: 1;
    }

    /* Add a blue text color to links */
    a {
      color: dodgerblue;
    }

    .container {
      padding: 16px;
      background-color: white;
      align-content: center;
      margin-top: 500px;
    }

    * {
      box-sizing: border-box;
    }
  </style>
</head>

<body>

  <form method="get" class="container">

    <button type="submit" formaction="MyProfile1.php" id="registerbtn"> View Profile </button>

    <button type="submit" formaction="leavaChit.php" id="registerbtn"> Request a Leave</button>

  </form>

</body>

</html>