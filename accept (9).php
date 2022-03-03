
   <?php


    require("connect (1).php");

    $id = $_GET['id'];
    $epf = $_GET['epf'];
    $casual = $_GET['casual'];
    $vacation = $_GET['vacation'];
    $other = $_GET['other'];

    /*
    echo $id;
    echo $epf;
    echo $casual;
    echo $vacation;
    echo $other;
    */

    $sql = "SELECT * from staff_details where epf ='" . $epf . "'";

    $result = $db->query($sql);

    if ($result->num_rows > 0) {

        if ($row = $result->fetch_assoc()) {
            $cLeaves = $row['cLeaves'];
            $vLeaves = $row['vLeaves'];
            $oLeaves = $row['oLeaves'];
        }
    } else {
        echo '0 results';
        echo '<br>';
    }

    $cLeaves = $cLeaves + $casual;
    $vLeaves = $vLeaves + $vacation;
    $oLeaves = $oLeaves + $other;

    $sql = "UPDATE staff_details SET cLeaves = '" . $cLeaves . "',vLeaves = '" . $vLeaves . "',oLeaves = '" . $oLeaves . "'  WHERE epf = '" . $epf . "'";

    if ($db->query($sql)) {
    } else {
        echo "error";
    }

    $sql = "UPDATE leave_request_details SET confirmation = 1 WHERE id = '" . $id . "'";

    if ($db->query($sql)) {
        echo "<script>alert('accepted')</script>";
    } else {
        echo "error";
    }

    $db->close();

    header('Location:http://localhost/leave/pendingRequest2%20(8).php?');

    ?>
