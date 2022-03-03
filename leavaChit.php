<?php

require('connect (1).php');

session_start();

$sql = "SELECT * from staff_details where epf ='" . $_SESSION['epf'] . "'";

$result = $db->query($sql);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {

        $epf = $row['EPF'];
    }
} else {
    echo '0 results';
    echo '<br>';
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Leave Form</title>

    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="css/login.css" rel="stylesheet" type="text/css" />
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
            padding-top: 10px;
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

        #sub {
            font-size: 25px;
        }
    </style>
    <script>
        function validateForm() {
            var a = document.forms["myform"]["epf"].value;
            if (a = "") {
                alert("EPF Number must be filled out");
                return false;
            }
            var b = document.forms["myform"]["name"].value;
            if (b = "") {
                alert("Name must be filled out");
                return false;
            }
            var c = document.forms["myform"]["city"].value;
            if (c = "") {
                alert("City must be filled out");
                return false;
            }
            var d = document.forms["myform"]["designation"].value;
            if (d = "") {
                alert("Designation must be filled out");
                return false;
            }
            var e = document.forms["myform"]["department"].value;
            if (e = "") {
                alert("Department must be filled out");
                return false;
            }
            var f = document.forms["myform"]["email"].value;
            if (f = "") {
                alert("Email must be filled out");
                return false;
            }
            var g = document.forms["myform"]["telephone"].value;
            if (g = "") {
                alert("telephone Number must be filled out");
                return false;
            }
            var h = document.forms["myform"]["homeadd"].value;
            if (h = "") {
                alert("Home Address must be filled out");
                return false;
            }

        }
    </script>
</head>

<body>
    <h2>Leave Form</h2><br>

    <form method="POST" action="connectRequest.php" name="myform" class="needs-validation" novalidate id="fm">

        <label for="epf" id="epf">EPF No:</label>
        <b> <?php echo $epf ?></b><br><br>
        <input type="text" id="epf" name="epf" value="<?php echo $epf ?>" hidden>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <table border="1" style="width:80%" id="tb1">

                    <tr>
                        <td style="width:35%">Number of days leave applied for:</td>
                        <td style="width:05%"><input type="text" name="casual" style="width:100%" placeholder="C"> </td>
                        <td style="width:05%"> <input type="text" name="vacation" style="width:100%" placeholder="V"></td>
                        <td style="width:05%"> <input type="text" name="other" style="width:100%" placeholder="O"></td>
                        <td style="width:35%">Date of commencing leave:
                            <input type="date" style="width:100%" name="leaveStart"></td>

                    </tr>
                    <tr>
                        <td colspan="4">Reasons for leave: <input type="text" style="width:100%" name="reason"></td>
                        <td style="width:35%">Date of returning duties:<input type="date" style="width:100%" name="leaveEnd"></td>

                    </tr>
                    <tr>
                        <td colspan="4">Date: <input type="date" style="width:100%" name="date"></td>
                        <td colspan="4" rowspan="2">Address when on leave: <textarea type="text" style="width:100%" name="address_when_on_leave" rows="4" cols="50"></textarea></td>
                    </tr>

                    <tr>
                        <td colspan="4">Name of the acting officer: <input type="text" style="width:100%" name="acting_officer"></td>

                    </tr>
                </table>

                <div class="confirm">
                    <input type="submit" value="Apply" class="btn btn-info" id="sub">
                    <button type="button" class="btn btn-info" id="can">Cancel</button>
                </div>

            </div>
        </div>
    </form>
</body>


</html>