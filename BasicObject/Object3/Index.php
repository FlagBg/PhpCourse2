<?php

//
/*include_once '';
*
*/

include_once 'Car.php';
include_once 'Dog.php';
include_once 'Person.php';
include_once 'Initialize.php';
	
	
//$index = new Index();

$object = new Person();
echo $object->move();


$person = new Person();
$person->$this->move(5);

$index = new Initialize();

$dog = new Dog();
$car = new Car();

$index->start($person);
$index->start($dog);
$index->start($car);

$index->stopping($person);
$index->stopping($dog);
$index->stopping($car);

$index->turning($person);
$index->turning($dog);
$index->turning($car);

	//start( $person );
// $initilize-> start( $dog );
// $initilize-> start( $car );

// $initilize-> stopping( $person);
// $initilize-> stopping( $dog);
// $initilize-> stopping( $car);

// $initilize-> turning( $person);
// $initilize-> turning( $dog);
// $initilize-> turning( $car);

