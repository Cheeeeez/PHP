<?php
$string = "hi, i stand here since afternoon";
echo $string;
echo "<br><br>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $char = $_POST["char"];

    function countAppearTimes($str,$keyword) {
        $count = 0;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($str[$i] == $keyword) {
                $count++;
            }
        }
        if ($count > 0) {
            return $count;
        } else {
            return -1;
        }
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
    <input type="text" name="char" placeholder="Nhập 1 ký tự để đếm">
    <input type="submit" value="Đếm">
</form>
<?php
if (countAppearTimes($string,$char) != -1) {
    echo "Ký tự " . $char . " xuất hiện " . countAppearTimes($string,$char) . " lần.";
} else {
    echo "Ký tự " . $char . " không có trong chuỗi.";
}
?>
</body>
</html>
