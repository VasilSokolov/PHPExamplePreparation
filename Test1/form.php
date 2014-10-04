<form>
    <input type="text" name="fname"/>
    <input type="submit"/>
</form>
<?php
if(isset($_GET['fname'])){
    echo $_GET['fname'];
}
?>
////////////////////////////////////////////////////
<form method="get">
    Enter your name: <input type="text" name="name" />
    <input type="submit" />
</form>
<?php
if (isset($_GET["name"]))
    echo "Hello, " . htmlspecialchars($_GET["name"]);
?>
