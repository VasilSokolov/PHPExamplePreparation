<form method="post">
    <input type="text" name="user">
    <input type="password" name="pass">
    <input type="submit" >
</form>

<?php
if(isset($_POST['user'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if($user == 'nakov' && $pass == '123'){
        session_start();
        $_SESSION['user'] = $user;
        header("Location: http://softuni.bg");
    }else{
        echo "Invalid user / pass. ";
    }
}

?>