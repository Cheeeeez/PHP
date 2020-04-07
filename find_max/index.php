<?php
echo "<table width='150px'>";
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

echo "<span>Giá trị lớn nhất là: " . findMax($array) . "</span>";


function findMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($arr[$i][$j] > $max) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
    $array2 = $_REQUEST['value'];
    function findMaxValue($arr)
    {
        $max = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($max < $arr[$i]) {
                $max = $arr[$i];
            }
        }
        return $max;
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
<h2>Nhập kích thước ma trận </h2>
<form method="post">
    <label>Chiều dài ma trận:</label>
    <input type="text" name="rows">
    <label>Chiều rộng ma trận:</label>
    <input type="text" name="cols">
    <input type="submit" value="Xác nhận">
    <table>
        <?php for ($i = 0; $i < $rows; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $cols; $j++): ?>
                    <td><input style="width: 50px" type="number" name="value[]"></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
    <?php echo "Số lớn nhất là: " . findMaxValue($array2) ?>
</form>
</body>
</html>

