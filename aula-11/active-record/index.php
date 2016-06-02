<?php

require_once "vendor/autoload.php";

use Season\Model\Student;

try {
    $students = Student::all();
} catch (PDOException $e)
{
    echo $e->getMessage();
}

echo $students;

foreach ($students as $student) {
    var_dump($student->toArray());
}

$newStudent = new Student;
$newStudent->name = 'Gabriel';
$newStudent->city = 'São Paulo';
$newStudent->save();

$newStudent2 = new Student;
$newStudent2->fill([
    'name' => 'Juca',
    'city' => 'Rio Branco'
]);
$newStudent2->save();

$students = Student::all();
echo $students;
