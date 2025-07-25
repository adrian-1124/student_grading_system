<?php
use Adrian\Gs\models\StudentModels;

require 'vendor/autoload.php';

$student = new StudentModels;
//$listofStudents= $student->read();
//print_r($listofStudents);
$student->id=12345;
$student->name="Mamigo";
$student->course="BSIT";
$student->year_level=2;
$student->section="D";

$student->create();
//$student->delete(12345);
//$student->update();


?>