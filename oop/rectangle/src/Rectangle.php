<?php
namespace oop;
class Rectangle
{
    protected $width;
    public $height;

    public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    }

    public function getArea() {
        return $this->width * $this->height;
    }

    public function getPerimeter() {
        return ($this->width + $this->height) * 2;
    }

    public function render() {
        for ($i = 0; $i < $this->height; $i++) {
            for ($j = 0; $j < $this->width; $j++) {
                if ($i == 0 || $i == $this->height-1 || $j == 0 || $j == $this->width-1) {
                    echo "*" . " &nbsp;";
                } else {
                    echo " &nbsp&nbsp;&nbsp;";
                }
            }
            echo "<br>";
        }
    }
}
