<?php

function calSumDiagonalLine($arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($i == $j) {
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}
    echo "<table style='width: 150px'>";
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        $array[$i] = [];
        for ($j = 0; $j < 5; $j++) {
            array_push($array[$i], random_int(1, 100));
            echo "<td>" . $array[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
    echo "<span>Tổng các số ở đường chéo chính là: " . calSumDiagonalLine($array) . "</span>";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Nhập kích thước ma trận </h2>
<form method="get" action="matrix.php">
    <label>Kích thước ma trận:</label>
    <input type="text" name="size">
    <input type="submit" value="Xác nhận">
</form>
</body>
</html>

