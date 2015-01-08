<?php
    require('config/connectionPHP.php');
    session_start();
    if (isset($_POST['submit'])) {

        $username = htmlentities(
            trim($_POST['username']));
        $password = htmlentities(
            trim($_POST['password']));
        $password = hash('sha256', $password);

        $query = "SELECT id, username FROM 'users'
                    WHERE username = '$username'
                    AND password = '$password'";
        $result = $mysqli->query($query);
        if ($result->num_rows !=0) {
            $loggedUser = $result->fetch_assoc();
            var_dump($loggedUser);
            die();
            $_SESSION['LoggedUser'] = true;
            $_SESSION['LoggedUserId']= $loggedUser['id'];
            $_SESSION['loggedUsername'] = $loggedUser['username'];
            echo 'Logged in.';
            header('Location: index.php');
        }else {
            echo 'Invalid login.';
        }
    }else {
        header('Location: index.php');
    }

?>