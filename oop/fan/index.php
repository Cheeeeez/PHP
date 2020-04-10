<?php
include "Fan.php";
$fan1 = new Fan();
$fan2 = new Fan();


$fan1->setSpeed($fan1->getFAST());
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan1->setOn(true);

$fan2->setSpeed($fan2->getMEDIUM());
$fan2->setRadius(5);
$fan2->getColor();

echo 'Fan1: ';
echo $fan1->toString();
echo "<br>Fan2: ";
echo $fan2->toString();

