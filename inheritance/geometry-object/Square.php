<?php
include_once 'Rectangle.php';

class Square extends inheritance\Rectangle {
    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}