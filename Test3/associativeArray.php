



<?php
header("Content-Type: text/html; charset=utf8");
$prices = [
    'orange' => 2.30,
    'apple' => 1.44,
    'grapes' => 1.88
];

$prices["картофи"] = 0.35;
var_dump($prices);
unset($prices['orange']);
$prices = (object)$prices;
$prices->color = 'red';
echo var_dump($prices);
foreach ($prices as $product => $price) {
    echo"<p>$product costs $price</p>\n";
}

?>
