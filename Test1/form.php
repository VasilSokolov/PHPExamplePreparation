<!--<!--<form>-->
<!--    <input type="text" name="fname"/>-->
<!--    <input type="submit"/>-->
<!--</form>-->
<!--//--><?php
/*//if(isset($_GET['fname'])){
//    echo $_GET['fname'];
//}
//*/?>


<!--<form method="get">-->
<!--    Enter your name: <input type="text" name="name" />-->
<!--    <input type="submit" />-->
<!--</form>-->
<!--//--><?php
/*//if (isset($_GET["name"]))
//    echo "Hello, " . htmlspecialchars($_GET["name"]);
//*/?>

<!--//addslashes()//
//echo addslashes("listfiles('C:\')");
// Result: listfiles(\'C:\\\')

//addcslashes()//
//echo addcslashes("say('hi')", ';|<>\'"');
// Result: say(\'hi\')

<!--<form method="get">-->
<!--    Name: <input type="text" name="name" value="&lt;br&gt;" />-->
<!--    <input type="submit" />
<!--</form>-<!--->
<!--//--><?php
/*/*/if (isset($_GET["name"]))
//    echo "Hi, <i>" . htmlspecialchars($_GET["name"] . "</i>");
//*/*/?>
    <!--//Validating User Input//-->
<!--<form>-->
<!--    <input type="text" name="num" />-->
<!--    <input type="submit" />-->
<!--</form>
<!--//--><?php
//if (isset($_GET['num'])) {
//    $num = intval($_GET['num']);
//    if ($num < 1 || $num > 100) {
//        echo "Please enter an integer number in range [1..100].";
//        die;
//    }
//    echo "You entered valid number: $num.";
//}
//*/?>
<!--
//filter_var()

<?php
//
//$ip_a = '127.0.0.1';
//$ip_b = '42.42';
//if (filter_var($ip_a, filter_validate_ip)) {
// echo "this (ip_a) ip address is considered valid.";
//}
//if (filter_var($ip_b , filter_validate_ip)) {
//    echo "this (ip_b) ip address is considered valid.";
//}
//?>

<!--
<form>
    Do you like beer?
    <input type="checkbox" name="likeBeer"/>
    <input type="submit">
</form>

--><?php
/*if(isset($_GET["likeBeer"])){
    echo "I like beer";
}
*/?>

<!---->
<!--<form method="post">-->
<!--    <input type="text" name="user" />-->
<!--    <input type="submit" />-->
<!--    --><?php //if (isset($_POST['user'])) { ?>
<!--        <input type="hidden" name="hiddenName"-->
<!--               value="--><?php //echo sha1($_POST['user']) ?><!--" />-->
<!--    --><?php //} ?>
<!--</form>-->

<!---->
<!--<!--Submitting Arrays-->
<!--<form method="post">-->
<!--    <select name="people[]" multiple="multiple">-->
<!--        <option value="Mario">Mario</option>-->
<!--        <option value="Svetlin">Svetlin</option>-->
<!--        <option value="Teodor">Teodor</option>-->
<!--    </select>-->
<!--    <input type="submit" value="submit"/>-->
<!--</form>-->
<!---->
<?php
//if(isset($_POST["people"])){
//    var_dump($_POST["people"]);
//}
//?>

<form method="post">
    Male <input type="radio" name="gender" value="male" /> <br/>
    Female <input type="radio" name="gender" value="female" /> <br/>
    <input type="submit" value="submit"/>
</form>
<?php
if (isset($_POST['gender'])) {
    $selected_radio = $_POST['gender'];
    echo "Selected: $selected_radio";
}
?>



