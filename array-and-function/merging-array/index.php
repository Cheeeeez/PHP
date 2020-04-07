<?php
$arr1 = $arr2 = $arr3 = [];
for ($i = 0; $i < 10; $i++) {
    array_push($arr1, random_int(1, 100));
    array_push($arr2, random_int(1, 100));
}

var_dump($arr1);
var_dump($arr2);

foreach ($arr1 as $value) {
    array_push($arr3, $value);
}

foreach ($arr2 as $value) {
    array_push($arr3, $value);
}
var_dump($arr3);