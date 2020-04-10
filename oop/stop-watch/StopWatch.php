<?php


class StopWatch {
    private $startTime;
    private $stopTime;

    public function getStartTime() {
        return $this->startTime;
    }

    public function getStopTime() {
        return strtotime($this->stopTime);
    }

    public function start() {
        $this->startTime = time();
    }

    public function stop() {
        $this->stopTime = time();
    }

    public function getElapsedTime() {
        return  $this->stopTime - $this->startTime;
    }
}