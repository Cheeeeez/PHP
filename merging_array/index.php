<?php
$arr1 = $arr2 = $arr3 = [];
for ($i = 0; $i < 10; $i++) {
    array_push($arr1, random_int(1, 100));
    array_push($arr2, random_int(1, 100));
}

var_dump($arr1);
var_dump($arr2);

for ($j = 0; $j < count($arr1); $j++) {
    array_push($arr3, $arr1[$j]);
}

for ($k = 0; $k <count($arr2); $k++) {
    array_push($arr3,$arr2[$k]);
}

var_dump($arr3);