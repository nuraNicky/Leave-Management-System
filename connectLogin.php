<?php

//equire( 'connect (1).php' );

//$EPF = $_POST['EPF'];
//$name = $_POST['name'];
//$city = $_POST['city'];

if (isset($_POST['email']) && isset($_POST['password'])) {
    require('connect (1).php');

    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        header('Location: login.php?error=Username is required');
        exit();
    } else if (empty($password)) {
        header('Location: login.php?error=Password is required');
        exit();
    } else {
        $sql = "SELECT * FROM logiin WHERE email='$email' AND password='$password'";
        //$sql = 'SELECT * FROM logiin';
        $result = $db->query($sql);

        if ($result->num_rows > 0) {

            if ($row = $result->fetch_assoc()) {

                /***********************/

                $sql = "SELECT * from logiin where email='$email' AND password='$password' and designation=1";

                $result = $db->query($sql);

                if ($result->num_rows > 0) {

                    if ($row = $result->fetch_assoc()) {
                        header("Location: lecHome.php?email=$email");
                    }
                } else {
                    header("Location: hodHome.php?email=$email");
                }
            }

            /*******************************/
        } else {
            header("Location: login.php?error='Incorrect username or password'");

            echo '0 results';
            echo '<br>';
        }
    }
} else {
    header('Location: login.php');
    exit();
}
