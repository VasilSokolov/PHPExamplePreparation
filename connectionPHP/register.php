<?php
    require('config/connectionPHP.php');
    if (isset($_POST['submit'])) {
        $username = htmlentities(trim($_POST['username']));
        $password = htmlentities(trim($_POST['password']));
        $email = htmlentities(trim($_POST['email']));

        $password = hash('sha256', $password);

        $query = "SELECT id
                    FROM 'users'
                    WHERE username = '$username' LIMIT 1";
        $result = $mysqli->query($query);

        if ($result->num_rows !=0) {
            echo "User already registered";
        }else {
            $query = "INSERT INTO 'users'
                    (username, password, email)
                    VALUES(
                        '$username',
                        '$password',
                        '$email')";
            if ($mysqli->query($query) === TRUE) {
                header('Location: profile.php');
            }else {
                echo $mysqli->error;
                echo "Error";
            }
        }
    }
    else {
        header('Location: index.php');
    };
?>