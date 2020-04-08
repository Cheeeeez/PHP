<?php
include "QuadraticEquation.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $_REQUEST["c"];
    $quadraticEquation = new QuadraticEquation($a, $b, $c);
    if (isset($a,$b,$c)) {
        echo $quadraticEquation->displayRoot();
    }
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
</head>
<body>
<h1>Tìm nghiệm phương trình ax<sup> 2</sup> + bx + c = 0</h1>
<form method="get">
    <input type="text" name="a" placeholder="Nhập giá trị của a"><br><br>
    <input type="text" name="b" placeholder="Nhập giá trị của b"><br><br>
    <input type="text" name="c" placeholder="Nhập giá trị của c"><br><br>
    <input type="submit" value="Tính">
</form>
</body>
</html>
