<!--<!--<form>-->
<!--    <input type="text" name="fname"/>-->
<!--    <input type="submit"/>-->
<!--</form>-->
//<?php
/*//if(isset($_GET['fname'])){
//    echo $_GET['fname'];
//}
//*/?>
<!--////////////////////////////////////////////////////-->
<!--<form method="get">-->
<!--    Enter your name: <input type="text" name="name" />-->
<!--    <input type="submit" />-->
<!--</form>-->
//<?php
/*//if (isset($_GET["name"]))
//    echo "Hello, " . htmlspecialchars($_GET["name"]);
//*/?>
//////////////////////////////////////////////////
//addslashes()//
//echo addslashes("listfiles('C:\')");
// Result: listfiles(\'C:\\\')

//addcslashes()//
//echo addcslashes("say('hi')", ';|<>\'"');
// Result: say(\'hi\')

////////////////////////////////////////////////////
<!--<form method="get">-->
<!--    Name: <input type="text" name="name" value="&lt;br&gt;" />-->
<!--    <input type="submit" />-->
<!--</form>-->
//<?php
/*//if (isset($_GET["name"]))
//    echo "Hi, <i>" . htmlspecialchars($_GET["name"] . "</i>");
//*/?>
/////////////////////////////////////////////////////
//Validating User Input//
<!--<form>-->
<!--    <input type="text" name="num" />-->
<!--    <input type="submit" />-->
<!--</form>-->
//--><?php
/*//if (isset($_GET['num'])) {
//    $num = intval($_GET['num']);
//    if ($num < 1 || $num > 100) {
//        echo "Please enter an integer number in range [1..100].";
//        die;
//    }
//    echo "You entered valid number: $num.";
//}
//*/?>
<!--
////////////////////////////////
//filter_var()
//<?php
/*//$ip_a = '127.0.0.1';
//$ip_b = '42.42';
//if (filter_var($ip_a, FILTER_VALIDATE_IP)) {
//    echo "This (ip_a) IP address is considered valid.";
//}
//if (filter_var($ip_b , FILTER_VALIDATE_IP)) {
//    echo "This (ip_b) IP address is considered valid.";
//}
//*/?>
<!--/////////////////////////////////-->-->

<form>
    Do you like beer?
    <input type="checkbox" name="likeBeer"/>
    <input type="submit">
</form>

<?php
if(isset($_GET["likeBeer"])){
    echo "I like beer";
}
?>
