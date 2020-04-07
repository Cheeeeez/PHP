<?php
$array = [1, 2, 3, 8, 4, 5, 6, 7, 8, 8, 9];
foreach ($array as $item) {
    echo $item . " ";
}

echo "<br>";

function deleteValue($keyword)
{
    global $array;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $keyword) {
            array_splice($array, $i, 1);
            $i--;
        }
    }
    return $array;
}

deleteValue(8);
echo "Mảng sau khi xóa các phần tử có giá trị 8: <br>";
foreach ($array as $item) {
    echo $item . " ";
}

//function delete($array, $keyword) {
//    $index = findByKeyword($array,$keyword);
//    if ($index != -1) {
//        unset($array[$index]);
//    }
//    return $array;
//}
//
//delete(8);

//function findByKeyword($array, $keyword)
//{
//    for ($i = 0; $i < count($array); $i++) {
//        if ($array[$i] == $keyword) {
//            return $i;
//        }
//    }
//    return -1;
//}
