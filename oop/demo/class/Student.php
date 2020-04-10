<?php

class Student {
    protected $name;
    protected $email;
    protected $phone;

    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getName() {
        return $this->name;
    }


    public function getPhone() {
        return $this->phone;
    }

    public function getInfo() {
        return $this->name . "-" . $this->phone;
    }
}


