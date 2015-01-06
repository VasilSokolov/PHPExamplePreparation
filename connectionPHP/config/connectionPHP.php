<html>
<head>
    <title>My Sql Workshop</title>
</head>
<body>
<?php
$server = 'localhost';
$user = 'root';
$password = '';
$db_name = 'softuniworkchop';
$mysqli = new mysqli(
    $server, $user, $password, $db_name
);
if ($mysqli->connect_error) {
    die('Connect Error('.
        $mysqli->connect_errno.')'.
        $mysqli->connect_error);
}
?>
</body>
</html>