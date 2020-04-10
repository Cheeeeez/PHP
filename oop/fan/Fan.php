<?php


class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5.0;
    private $color = "blue";


    public function getSLOW() {
        return self::FAST;
    }

    public function getMEDIUM() {
        return self::MEDIUM;
    }

    public function getFAST() {
        return self::FAST;
    }

    public function setSpeed($speed){
        $this->speed = $speed;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function isOn(){
        return $this->on;
    }

    public function setOn($boolean){
        $this->on = $boolean;
    }

    public function getRadius(){
        return $this->radius;
    }

    function setRadius($radius){
        $this->radius = $radius;
    }

    public function getColor(){
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function toString() {
        if ($this->on) {
            return "Speed: " . $this->getSpeed() . ", Color: " . $this->getColor() . ", Radius: " . $this->getRadius() . ", fan is on";
        } else {
            return "Color: " . $this->getColor() . ", Radius: " . $this->getRadius() . ", fan is off";
        }
    }










}