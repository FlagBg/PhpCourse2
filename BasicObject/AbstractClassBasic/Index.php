<?php
/*
 * @brief  initilial file contains all paths
 */

include_once 'Dog.php';
include_once 'Cat.php';
include_once 'Person.php';


$dog = new Dog();
$dog->name = " Rudolph ";
$dog->age  = 6;

echo $dog->describe() . "and my name is $dog->name I am $dog->age years old. ";
echo $dog->greet();
echo $dog->move( 5 ) . " hours ";
//echo $dog->name;

$cat = new Cat();
$cat->name = "Kitty";
$cat->age = 5;

echo $cat->describe() . "and my name is $cat->name I am $cat->age years old. ";
echo $cat->greet();
echo $cat->move( 2 );

$person = new Person();
$person->name = "Angel";
$person->age = 23;

echo $person->describe() . "and my name is $person->name I am $person->age years old. ";
echo $person->greet();
echo $person->move(10) . "hours";
