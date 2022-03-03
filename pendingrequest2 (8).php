<?php

include 'connect (1).php';

$sql = 'SELECT count(id) as epfCount FROM leave_request_details WHERE confirmation is Null';

$result = $db->query($sql);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {
        $epfCount = $row['epfCount'];
        //echo $epfCount;
    }
} else {
    echo '0 results';
    echo '<br>';
}

?>

<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content='Mark Otto, Jacob Thornton, and Bootstrap contributors'>
    <meta name='generator' content='Jekyll v4.1.1'>
    <title>Album example · Bootstrap</title>

    <link rel='canonical' href='https://getbootstrap.com/docs/4.5/examples/album/'>

    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'>

    <!-- Favicons -->
    <link rel='apple-touch-icon' href='/docs/4.5/assets/img/favicons/apple-touch-icon.png' sizes='180x180'>
    <link rel='icon' href='/docs/4.5/assets/img/favicons/favicon-32x32.png' sizes='32x32' type='image/png'>
    <link rel='icon' href='/docs/4.5/assets/img/favicons/favicon-16x16.png' sizes='16x16' type='image/png'>
    <link rel='manifest' href='/docs/4.5/assets/img/favicons/manifest.json'>
    <link rel='mask-icon' href='/docs/4.5/assets/img/favicons/safari-pinned-tab.svg' color='#563d7c'>
    <link rel='icon' href='/docs/4.5/assets/img/favicons/favicon.ico'>
    <meta name='msapplication-config' content='/docs/4.5/assets/img/favicons/browserconfig.xml'>
    <meta name='theme-color' content='#563d7c'>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        body {
            background-color: dimgray;
        }

        .container {
            padding-left: 200px;
        }

        main {
            padding-right: 200px;
            padding-left: 200px;
        }

        p {
            float: right;
            font-family: sans-serif;
            font-size: 40px;
        }
    </style>

    <link href='album.css' rel='stylesheet'>

</head>

<body>

    <header>
        <div class='container d-flex justify-content-between'>
            <a href='hodHome.php' class='navbar-brand d-flex align-items-center'>
                <strong>Home</strong>
            </a>
        </div>
    </header>

    <main role='main'>

        <?php

        for ($i = 0; $i < $epfCount; $i++) {

            $i1 = $i + 1;

            $sql = "SELECT leave_request_details.id as id, leave_request_details.reason as reason, leave_request_details.date as date, leave_request_details.acting_officer as acting_officer, leave_request_details.casual as casual, leave_request_details.vacation as vacation, leave_request_details.other as other, leave_request_details.leaveStart as leaveStart, leave_request_details.leaveEnd as leaveEnd, leave_request_details.address_when_on_leave as address_when_on_leave,  staff_details.name as name, staff_details.EPF as EPF FROM leave_request_details inner join staff_details on leave_request_details.epf = staff_details.EPF WHERE leave_request_details.confirmation is Null order by leave_request_details.id desc limit $i1 OFFSET $i";

            $result = $db->query($sql);

            if ($result->num_rows > 0) {

                if ($row = $result->fetch_assoc()) {
                    $id = $row['id'];
                    $EPF = $row['EPF'];
                    $name = $row['name'];
                    $leaveStart = $row['leaveStart'];
                    $leaveEnd = $row['leaveEnd'];
                    $casual = $row['casual'];
                    $vacation = $row['vacation'];
                    $other = $row['other'];
                    $reason = $row['reason'];
                    $acting_officer = $row['acting_officer'];
                    $address_when_on_leave = $row['address_when_on_leave'];
                    $date = $row['date'];
                }
            } else {
                echo '<br>';

                echo '0 results';
                echo '<br>';
            }

        ?>

            <form method="GET">

                <section class='jumbotron text-center'>

                    <div class='container'>
                        <table>
                            <tr>
                                <th>id No. :</th>
                                <td><?php echo $id ?> </td>
                            </tr>
                            <tr>
                                <th>EPF No. :</th>
                                <td><?php echo $EPF ?> </td>
                            </tr>
                            <tr>
                                <th>Name :</th>
                                <td> <?php echo $name ?> </td>
                            </tr>
                            <tr>
                                <th>Date of commencing leave :</th>
                                <td> <?php echo $leaveStart ?> </td>
                            </tr>
                            <tr>
                                <th>Date of returning duties :</th>
                                <td> <?php echo $leaveEnd ?></td>
                            </tr>
                            <tr>
                                <th>Casual Leaves :</th>
                                <td> <?php echo $casual ?> </td>
                            </tr>
                            <tr>
                                <th>Vacation Leaves :</th>
                                <td> <?php echo $vacation ?></td>
                            </tr>
                            <tr>
                                <th>other Leaves :</th>
                                <td> <?php echo $other ?></td>
                            </tr>
                            <tr>
                                <th>Reasons for leave :</th>
                                <td> <?php echo $reason ?></td>
                            </tr>
                            <tr>
                                <th>Name of the acting officer :</th>
                                <td> <?php echo $acting_officer ?> </td>
                            </tr>
                            <tr>
                                <th>Address when on leave :</th>
                                <td> <?php echo $address_when_on_leave ?> </td>
                            </tr>
                            <tr>
                                <th>Date :</th>
                                <td> <?php echo $date ?> </td>
                            </tr>
                        </table>
                        <br><br>
                        <p>

                            <a class="btn btn-primary my-2" href="accept (9).php?id=<?php echo $id ?>&epf=<?php echo $EPF ?>&casual=<?php echo $casual ?>&vacation=<?php echo $vacation ?>&other=<?php echo $other ?>">Accept</a>
                            <a class="btn btn-secondary my-2" href="reject.php?id=<?php echo $id ?>">Reject</a>

                        </p>
                    </div>

                </section>

            </form>

        <?php
        }
        ?>

    </main>

    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js' integrity='sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV' crossorigin='anonymous'></script>
    <!--<script src = 'https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity = 'sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin = 'anonymous'></script>-->
    <script>
        window.jQuery || document.write('<script src="/docs/4.5/assets/js/vendor/jquery.slim.min.js"><\/script>')
    </script>
    <!--      <script src = '/docs/4.5/dist/js/bootstrap.bundle.min.js' integrity = 'sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf' crossorigin = 'anonymous'></script></body>-->
</body>

</html>