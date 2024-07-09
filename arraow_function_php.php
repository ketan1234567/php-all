<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$numbers2 = [10, 20, 30, 40, 50, 60];

$combined = array_map(function($item1,$item2)
{ return $item1+$item2; },$numbers, $numbers2);

echo "<pre>";
print_r($combined);

?>
