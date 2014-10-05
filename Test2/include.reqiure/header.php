<?php header("Content-Type: text/html; charset=utf8");?>

<!DOCTYPE html>
    <html>
        <head>
            <title>
                <?php if(isset($title)) echo htmlentities($title); ?>
            </title>
        </head>
        <body>
        <header style="background-color: lightblue">
            I am the header
        </header>
<?php require_once("sidebar.php"); ?>