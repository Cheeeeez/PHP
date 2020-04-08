<?php
include("src/Rectangle.php");
$width = 10;
$height = 5;
$rectangle = new Rectangle($width, $height);

echo "Width: " . $rectangle->getWidth();
echo "<br>Height: " . $rectangle->getHeight();
echo "<br>Area: " . $rectangle->getArea();
echo "<br>Perimeter: " . $rectangle->getPerimeter();
echo "<br>";
$rectangle->render();
echo '<br>';

$rectangle->__construct(20, 10);

echo "<span style='color: blue'>AFTER SET:</span><br> ";
echo "<br>Width: " . $rectangle->getWidth();
echo "<br>Height: " . $rectangle->getHeight();
echo "<br>Area: " . $rectangle->getArea();
echo "<br>Perimeter: " . $rectangle->getPerimeter();
echo "<br>";
$rectangle->render();