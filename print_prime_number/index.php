<?php
function isPrimeNumber($n)
{
    if ($n < 2) {
        return false;
    } elseif ($n == 2) {
        return true;
    } elseif ($n % 2 == 0) {
        return false;
    } else {
        for ($i = 3; $i <= sqrt($n); $i += 2) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }
}

echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo $i . " ";
    }
}