<?php
require_once('config/connectionPHP.php');
session_start();
$logged = isset($_SESSION['loggedUser']) ? true : false;
?>
<html>
<head>
    <?php
        if (isset($_SESSION['loggedUser'])) {
            $title = 'Hello, '.$_SESSION['loggedUsername'];
        }else {
            $title = 'My sql workshop';
        }
    ?>
    <title></title>
    <script src="js/jQuery.1.9.1.min.js" type="text/javascript"></script>
    <script src="js/register.js" type="text/javascript"></script>
</head>
<body>
    <main>
        <div id="login-register"
             style="<?php  echo $logged?'display:none':''?>">

        </div>
        <form action="register.php" method="post">
            Username:
            <input type="text" name="username"/>
            Password:
            <input type="password" id="password" name="password"/>
            Confirm password:
            <input type="password" id="confirmPass" name="confirmPass"/>
            Email:
            <input type="email" id="email" name="email"/>
            <input type="submit" id="registerButton" name="submit" value="Register!"/>
        </form>

        <form action="login.php" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" name="submit" value="Login!">
        </form>
        <?php if($logged){?>
        <a href="logout.php">Logout</a>
        <?php }?>
    </main>
</body>
</html>