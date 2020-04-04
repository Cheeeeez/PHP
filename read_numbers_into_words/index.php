<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read numbers into words</title>
</head>
<body>
<form method="get">
    <div>
        <h2>Enter number to convert</h2>
        <input type="text" name="number" placeholder="Enter number">
        <input type="submit" value="Convert">
    </div>
</form>
<?php
function readOneNumber($number)
{
    switch ($number) {
        case 0 :
            return "zero";
        case 1 :
            return "one";
        case 2 :
            return "two";
        case 3 :
            return "three";
        case 4 :
            return "four";
        case 5 :
            return "five";
        case 6 :
            return "six";
        case 7 :
            return "seven";
        case 8 :
            return "eight";
        case 9 :
            return "nine";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $number = $_GET["number"];
    $hundreds = floor($number / 100);
    $tens = floor($number / 10) % 10;
    $ones = $number % 10;
    $lengthOfNumber = strlen($number);
    $str = "";
    switch ($lengthOfNumber) {
        case 3 :
            $str .= readOneNumber($hundreds) . " hundred and ";
        case 2 :
            if ($tens == 1) {
                if ($ones == 0) {
                    $str .= "ten";
                } else if ($ones == 1) {
                    $str .= "eleven";
                } else if ($ones == 2) {
                    $str .= "twelve";
                } else if ($ones == 3) {
                    $str .= "thirteen";
                } else if ($ones == 5) {
                    $str .= "fifteen";
                } else {
                    $str .= readOneNumber($ones) . "teen";
                }
                break;
            } else if ($tens == 2) {
                $str .= "twenty ";
            } else if ($tens == 3) {
                $str .= "thirty ";
            } else if ($tens == 4) {
                $str .= "forty ";
            } else if ($tens == 5) {
                $str .= "fifty ";
            } else if ($tens > 0) {
                $str .= readOneNumber($tens) . "ty ";
            }
        case 1 :
            if ($ones > 0) {
                $str .= readOneNumber($ones);
            }
            break;
        default :
            $str = "out of ability";
    }
    echo $str;
}
?>
</body>
</html>