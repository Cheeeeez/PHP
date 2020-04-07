<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
    $colPos = $_POST['col_pos'] - 1 ;
    $_POST['rows'] = $rows;
    $_POST['cols'] = $cols;
    echo "<table>";
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        $array[$i] = [];
        for ($j = 0; $j < $cols; $j++) {
            array_push($array[$i], random_int(1, 100));
            echo "<td>" . $array[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
    function calSumAColumn($arr, $column) {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($column == $j) {
                    $sum += $arr[$i][$j];
                }
            }
        }
        return $sum;
    }
    echo calSumAColumn($array,$colPos);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            width: 150px;
            text-align: right;
        }
    </style>
</head>
<body>
<h2>Nhập kích thước ma trận </h2>
<form method="post">
    <label>Chiều dài ma trận:</label>
    <input type="text" name="rows"><br>
    <label>Chiều rộng ma trận:</label>
    <input type="text" name="cols"><br>
    <label>Cột muốn tính tổng:</label>
    <input type="text" name="col_pos">
    <input type="submit" value="Xác nhận">
</form>
</body>
</html>
