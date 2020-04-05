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