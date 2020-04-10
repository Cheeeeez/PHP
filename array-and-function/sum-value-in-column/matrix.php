<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $rows = $_REQUEST['rows'];
    $cols = $_REQUEST['cols'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $rows = $_REQUEST['rows'];
    $cols = $_REQUEST['cols'];
    $colPos = $_REQUEST['col_pos'];

    $arr = [];
    for ($k = 0; $k < $rows; $k++) {
        $arr[$k] = [];
        for ($l = 0; $l < $cols; $l++) {
            $arr[$k][$l] = $_REQUEST["value-$k-$l"];
        }
    }

    function calSumAColumn($arr, $column)
    {
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++) {
                if ($column - 1 == $j) {
                    $sum += $arr[$i][$j];
                }
            }
        }
        return $sum;
    }

    echo "Tổng các số ở cột " . $colPos . " là: " . calSumAColumn($arr,$colPos);
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
    <table>
        <?php for ($i = 0; $i < $rows; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $cols; $j++): ?>
                    <td><input style="width: 50px" type="text" name="value-<?php echo $i . '-' . $j ?>"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <label>Cột muốn tính tổng:</label><br>
    <input type="text" name="col_pos">
    <input type="submit" value="Tính">
</form>
</body>
</html>
