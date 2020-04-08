<?php


class Fan {
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed = self::SLOW;
    private $on = false;
    private $radius = 5.0;
    private $color = "blue";



    public function getSpeed(){
        return $this->speed;
    }

    public function setSpeedSlow(){
        $this->speed = self::SLOW;
    }

    public function setSpeedMedium(){
        $this->speed = self::MEDIUM;
    }

    public function setSpeedFast(){
        $this->speed = self::FAST;
    }

    public function isOn(){
        return $this->on;
    }

    public function setOn($on){
        $this->on = $on;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function setRadius($radius){
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