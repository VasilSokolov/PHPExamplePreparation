<html>
<head>
    <title>Profile Page</title>
</head>
<body>

    <form>
        First name:
        <input type="text" name="firstName">
        Last name:
        <input type="text" name="lastName">
        Profile picture:
        <input type="file" name="profilePicture">
        Birth day:
        <input type="datetime" name="birthDay">
    </form>
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
