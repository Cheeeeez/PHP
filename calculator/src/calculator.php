<?php

class Calculator
{
    public function sum($firstNumber, $secondNumber)
    {
        return $firstNumber + $secondNumber;
    }

    public function sub($firstNumber, $secondNumber)
    {
        return $firstNumber - $secondNumber;
    }

    public function mul($firstNumber, $secondNumber)
    {
        return $firstNumber * $secondNumber;
    }

    public function division($firstNumber, $secondNumber)
    {
        if ($secondNumber == 0) {
            throw new Exception("second number must be different from 0 ");
        }
        return $firstNumber / $secondNumber;
    }
}