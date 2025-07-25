<?php

namespace Adrian\Gs\models;

use Adrian\Gs\core\crud;
use Adrian\Gs\core\Database;

class StudentModels extends Database implements Crud{
    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;

    public function __construct()
    {
        parent::__construct();
        $this->id=0;
        $this->name="";
        $this->course="";
        $this->year_level=0;
        $this->section="";

    }

    public function create(){
        $query = $this->conn->prepare("INSERT INTO `students`(`id`, `name`, `course`, `year_level`, `section`)
         VALUES ('$this->id','$this->name','$this->course','$this->year_level','$this->section')");
        if($query->execute()){
            echo "Student Inserted!!";

        }
       
    }


    public function read(){
        try {
            $sql = "SELECT * FROM student";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }catch (\Throwable $th) {
            //throw $th;
            echo $th->getMessage();
        }
    }

    public function update($id){
        $query = $this->conn->prepare
        ("UPDATE `students` SET id='$this->id',name='$this->name',course='$this->course',year_level='$this->year_level',section='$this->section'WHERE id = $id");
        if($query->execute()){
         echo "Student Updated Succesfully!!\n";
        }
         
       }
     
     public function delete($id){
     
         
         $query = $this->conn->prepare("DELETE FROM `students`WHERE id = $id");
         if($query ->execute()){
             echo "Student Deleted!!";
         }
     }
 }