<?php
include "src/check_prime.php";
echo("Các số nguyên tố nhỏ hơn 100 là: <br>");
for ($i = 0; $i < 100; $i++) {
    if (isPrimeNumber($i)) {
        echo $i . " ";
    }
}