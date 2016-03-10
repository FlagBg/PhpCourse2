<?php
include_once 'Rothy.php';
include_once 'AbstractDog.php';

$dog = new Rothy('Angel', 'male');
//print $dog->name;
print $dog->getName();
print $dog->getGender();
$dog->bark();
