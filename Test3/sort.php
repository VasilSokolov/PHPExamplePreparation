<?php
$students = array('Stoyan' => 6.00, 'Penka' => 5.78,
    'Maria' => 4.55, 'Stenli' => 5.02);
ksort($students);
print_r($students);
/*
(
  [Maria] => 4.55
  [Penka] => 5.78
  [Stenli] => 5.02
  [Stoyan] => 6
)*/
?>
 