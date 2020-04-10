<?php
$arr1 = $arr2 = $arr3 = [];
for ($i = 0; $i < 10; $i++) {
    array_push($arr1, random_int(1, 100));
    array_push($arr2, random_int(1, 100));
}
echo "array 1: ";
foreach ($arr1 as $value)
    echo $value . " ";

echo "<br> array 2: ";
foreach ($arr2 as $value) {
    echo $value . " ";
}

foreach ($arr1 as $value) {
    array_push($arr3, $value);
}

foreach ($arr2 as $value) {
    array_push($arr3, $value);
}

echo "<br> array 3: ";
foreach ($arr3 as $value) {
    echo $value . " ";
}