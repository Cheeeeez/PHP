<?php
$array = [];
for ($i = 0; $i < 10; $i++) {
    array_push($array, random_int(0, 100));
    echo $array[$i] . " ";
}



function findMin($arr){
    $min = $arr[0];
    $position = 0;
    foreach ($arr as $index => $value) {
        if ($value < $min) {
            $min = $value;
            $position = $index;
        }
    }
    return $position;
}

echo "<br>Số nhỏ nhất là: " . $array[findMin($array)];

