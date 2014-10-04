<?php

function calcSum() {
$sum = 0;
foreach (func_get_args() as $arg) {
$sum += $arg;
}
return $sum;
}
echo calcSum(1, 2), '<br />'; // 3
echo calcSum(10, 20, 30), '<br />'; // 60
echo calcSum(10, 22, 0.5, 0.75, 12.50), '<br />'; // 45.75

?>
