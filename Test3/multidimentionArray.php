<?php

$arr = [];
for ($row = 0; $row < 5; $row += 1) {
    $arr[$row]=[];
    for ($col = 0; $col < 5; $col += 1) {
        $arr[$row][$col] = $row*$col;
    }
}
?>

<?php
$arr = [
    "Gosho" => 3.55,
    "Pesho" => 6.00,
    "Mimi" => 4.00,
    "Todor" => 5.52
];
uasort($arr, function($a, $b){
    $first = is_array($a) ? max($a) : $a;
    $second = is_array($b) ? max($b) : $b;
});
echo json_encode($arr);
?>
 