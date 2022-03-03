
   <?php

    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        require("connect (1).php");
        $epf = $_POST['epf'];
        $reason = $_POST['reason'];
        $date = $_POST['date'];
        $acting_officer = $_POST['acting_officer'];
        $address_when_on_leave = $_POST['address_when_on_leave'];
        $casual = $_POST['casual'];
        $vacation = $_POST['vacation'];
        $other = $_POST['other'];
        $leaveStart = $_POST['leaveStart'];
        $leaveEnd = $_POST['leaveEnd'];

        $query = "INSERT INTO leave_request_details(epf,reason,date,acting_officer,address_when_on_leave,casual, vacation, other, leaveStart, leaveEnd) VALUES('$epf','$reason','$date','$acting_officer','$address_when_on_leave','$casual','$vacation','$other', '$leaveStart','$leaveEnd')";

        if ($db->query($query)) {
            echo "<script>alert('Your request is now pending for approval. Please wait for confirmation. Thank you')</script>";
        } else {
            echo "Error: " . $query . "<br>" . $db->error;
        }
        $db->close();
    }


    //header("Location: http://localhost/leave/leavaChit.php?'");
    ?>