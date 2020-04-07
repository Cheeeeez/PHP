<?php
define("SIZE",20);
$array = [];
for ($i = 0; $i < SIZE; $i++) {
    array_push($array, random_int(0, 100));
    echo $array[$i] . " ";
}

function findMin($arr){
    $min = $arr[0];
    foreach ($arr as $index => $value) {
        if ($value < $min) {
            $min = $value;

        }
    }
    return $min;
}

echo "<br>Số nhỏ nhất là: " . findMin($array);
