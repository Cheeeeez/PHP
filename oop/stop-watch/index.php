<?php
include 'StopWatch.php';
$stopWatch = new StopWatch();

$array = [];
for ($i = 0; $i < 10000; $i++) {
    array_push($array, random_int(1, 1000));
}

$stopWatch->start();
$stopWatch->getStartTime();

for ($x = 0; $x < count($array); $x++) {
    for ($y = (count($array) - 1); $y > $x; $y--) {
        if ($array[$x] > $array[$y]) {
            $temp = $array[$y];
            $array[$y] = $array[$x];
            $array[$x] = $temp;
        }
    }
}

$stopWatch->stop();
$stopWatch->getStopTime();
echo $stopWatch->getElapsedTime();


