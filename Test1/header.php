<form action="logout.php">
    <input type="submit" value="logout"/>
</form>

<?php
session_start();
if (isset($_SESSION['user'])) {
    echo "Welcome" . htmlentities($_SESSION['user']);
} else {
    echo "Unauthorized access";
    die;
}
