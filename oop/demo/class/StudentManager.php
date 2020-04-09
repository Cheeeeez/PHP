<?php


class StudentManager {
    protected $listStudent = [];
    protected $file;
    public function __construct($file) {
        $this->file = $file;
    }

    public function add($student) {
        $students = $this->getDataJson();
        array_push($students, $student);
        $dataJson = json_encode($students);
        var_dump($dataJson);
        die();
        $this->saveDataToFile($students);
    }

    public function getStudents() {
        $data = $this->getDataJson();
        var_dump($data);
        return $this->listStudent;
    }

    public function getDataJson() {
        $dataJson = file_get_contents($this->file);
        return json_decode($dataJson,true);
    }

    public function saveDataToFile($data) {
        $dataJson = json_encode($data);
        var_dump($dataJson);
        file_put_contents($this->file,$dataJson);
    }
}