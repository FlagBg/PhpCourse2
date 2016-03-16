<?php
include_once 'Hero.php';
include_once 'Student.php';

$hero = new Hero();
$hero->name = "Avatar";
$hero->age = 33;

print $hero->describe();
print $hero->hello();
echo $hero->move();

$student = new Student();
$student->name = "George";
$student->age = 22;
$student->move();

print  $student->describe();
print $student->hello();
print $student->move();

//$str = 'abcdef';
//echo strlen($str);

//echo $student->hello()->describe();
