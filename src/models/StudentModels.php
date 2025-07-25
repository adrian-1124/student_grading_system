<?php

namespace lirazan\Gs\Models;

use lirazan\Gs\crud;
use lirazan\Gs\Database;

class studentModel extends Database implements Crud{
    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;

    public function __construct()
    {
        perent::__construct();
        $this->id="";
        $this->name="";
        $this->course="";
        $this->year_level="";
        $this->section="";

    }

    public function create(){
        //create data
        $query = $this->conn->prepare("INSERT INTO 'student'('ID', 'name','course','year_level','section')");

    }

    public function read(){
        try {
            $sql = "SELECT * FROM student";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }catch (\Throwable $th) {
            //throw $th;
            echo $th->getMesseage();
        }
    }

    public function update(){

    }

    public function delete(){

    }
}