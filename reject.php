
   <?php


    require("connect (1).php");

    $id = $_GET['id'];

    $sql = "UPDATE leave_request_details SET confirmation = '0' WHERE id = '" . $id . "'";

    if ($db->query($sql)) {
        echo "<script>alert('Rejected')</script>";
    } else {
        echo "Error: " . $query . "<br>" . $db->error;
    }
    $db->close();

    ?>
