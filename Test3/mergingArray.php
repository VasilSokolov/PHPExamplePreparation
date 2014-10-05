<?php
$lightColors = array('yellow', 'red', 'pink', 'magenta');
$darkColors = array('black', 'brown', 'purple', 'blue');
$allColors = array_merge($lightColors, $darkColors);
print_r($allColors);

echo implode(", ", $allColors);

?>

<?php
$people = ['John' => 5000, 'Pesho' => 300];
extract($people);
echo $John; // 5000
?>

<?php
$array = [];
$array = array_fill(0, 5, '4'); // [4, 4, 4, 4, 4]
?>
 