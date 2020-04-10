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
        var_dump($students);
        $dataJson = json_encode($students);
        var_dump($dataJson);
        $this->saveDataToFile($students);

    }

    public function getStudents() {
        $data = $this->getDataJson();
        return $this->listStudent;
    }

    public function getDataJson() {
        $dataJson = file_get_contents($this->file);
        return json_decode($dataJson);
    }

    public function saveDataToFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->file,$dataJson,FILE_APPEND);
    }
}