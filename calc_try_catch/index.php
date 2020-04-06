<?php
function calc($x, $y)
{
    try {
        if ($y == 0 || ($x == 0 && $y == 0)) {
            throw new Exception("Mẫu số phải khác không.");
        }

        echo "<br>Tổng: " . ($x + $y) . "<br>Hiệu: " . ($x - $y) . "<br>Tích: " . ($x * $y) . "<br>Thương: " . ($x / $y);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

echo "x = 5, y = 5";
calc(5, 5);
echo "<br><br> x = 0, y = 1";
calc(0, 1);
echo "<br><br>x = 0, y = 0 <br>";
calc(0, 0);
