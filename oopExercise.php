<?php
function __autoload($class_name)
{
    include_once("classes/".$class_name.".php");
}

$bkiict=new Bkiict();

echo $bkiict->fullName;

$student= new student();

var_dump($student);

$course= new course();

//echo $course->title;

$course->title='Course Title';

//echo $course->title;

//echo "<br/>";
//
//$course->getCredits();
//echo $course;
//
//echo "<br/>";
//
//$course->getLessons();
//
//echo $course;