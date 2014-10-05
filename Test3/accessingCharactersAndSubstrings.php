<?php
$soliloquy = "To be or not be that is the question.";
echo strpos($soliloquy, "that"); // 16
var_dump(strpos($soliloquy, "nothing")); // bool(false)

echo strstr("This is madness!\n", "is ") ; // is madness!
echo strstr("This is madness!", " is", true); // This

$str = "abcdef";
echo substr($str, 1) ."\n";     // bcdef
echo substr($str, -2) ."\n";    // ef
echo substr($str, 0, 3) ."\n";  // abc
echo substr($str, -3, 1);       // d

?>

<?php $str = "Apples";
echo $str[2]; // p
?>
 