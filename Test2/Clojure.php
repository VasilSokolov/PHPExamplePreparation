<?php
function nextNumber() {
    $counter = 0; // the $counter variable gets closed
    return function() use (&$counter) {
        return ++$counter;
    };
}
$f = nextNumber();
echo $f() . "\n"; // 1
echo $f() . "\n"; // 2
echo $f() . "\n"; // 3
?>