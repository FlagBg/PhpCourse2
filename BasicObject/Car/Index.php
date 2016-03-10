<?php
include_once 'Ford.php';
include_once 'Opel.php';
include_once 'Car.php';
include_once 'Renault.php';
include_once 'Trabant.php';

 $ford = new Ford();
 print $ford->move();
 print "My default doors are: " . $ford->getDoors();
 print "Set number of doors: " . $ford->setDoors( 5 );
 print $ford->getDoors();
 
// 	  . "My Total number of doors: " . $ford->getDoors();


$opel = new Opel();
print $opel->move() . $opel->opelDoors();

$renault = new Renault();
$renault->move() . "my doors are: " . $renault->renaultDoors();

$trabant = new Trabant();
$trabant->move();
$trabant->setDoors( 4 );
 print $trabant->defaultSetTrabantDoors();

//$renault->renaultDoors();
 //echo $opel->
 //echo $opel->
// echo $opel->move();
 
// print $opel->move() . "my doors are: " . $opel->haveDoors( 3 );
//echo $ford->haveDoors(4);
