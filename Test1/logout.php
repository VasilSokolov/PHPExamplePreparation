<?php
session_start();
unset($_SESSION['user']);
header("Location: http://login1.php");

?>
