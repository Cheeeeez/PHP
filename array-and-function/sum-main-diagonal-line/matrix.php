<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $size = $_REQUEST["size"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = $_REQUEST['size'];
    $arr = [];
    for ($k = 0; $k < $size; $k++) {
        $arr[$k] = [];
        for ($l = 0; $l < $size; $l++) {
            $arr[$k][$l] = $_POST["value-$k-$l"];
        }
    }

    function sum($arr) {
        $sum = 0;
        for ($i = 0; $i < count($arr) ; $i++) {
            for ($j = 0; $j < count($arr[$i]); $j++ ){
                if ($i == $j){
                    $sum += $arr[$i][$j];
                }
            }
        }
        return $sum;
    }

    echo "Tổng các số ở đường chéo chính là: " . sum($arr);





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
        <?php for ($i = 0; $i < $size; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $size; $j++): ?>
                    <td><input style="width: 50px" type="text" name="value-<?php echo $i . '-' . $j ?>"></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <input type="submit" value="Tính">
</form>
</body>
</html>
