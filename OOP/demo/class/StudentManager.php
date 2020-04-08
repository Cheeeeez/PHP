<?php


class StudentManager {
    protected $listStudent = [];
    protected $file;
    public function __construct() {

    }

    public function add($student) {
        $students = $this->getDataJson();
        array_push($this->listStudent, $student);
    }

    public function getStudents() {
        return $this->listStudent;
    }

    public function getDataJson() {
        $dataJson = file_get_contents($this->file);
        return json_decode($dataJson);
    }

    public function saveDataToFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->file);
    }
}