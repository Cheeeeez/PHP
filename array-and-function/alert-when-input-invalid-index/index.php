<?php
$array = [];
for ($i = 0; $i < 100; $i++) {
    array_push($array,random_int(1, 100));
}
echo "<br>";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST["number"];
    foreach ($array as $value) {
        echo $value . " ";
    }

    try {
        if ($number < 0 || $number >= 100) {
            throw new Exception("<br>Chỉ số vượt quá giới hạn của mảng");
        }
        foreach ($array as $key => $value) {
            if ($key == $number) {
                echo "<br>Giá trị của phần tử có chỉ số ". $key . " là " . $value;
                break;
            }
        }
    } catch (Exception $e) {
        echo $e->getMessage();
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
<form method="post">
    <label>Nhập chỉ số của phần tử:</label>
    <input type="text" name="number">
    <input type="submit" value="Xác nhận">
</form>

</body>
</html>
