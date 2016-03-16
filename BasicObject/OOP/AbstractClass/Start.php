<?php
include_once 'Car.php';
include_once 'Traktor.php';
include_once 'Ferrari.php';
include_once 'JohnDear.php';

$car = new car( $time );
$traktor = new Tractor( $time );
$ferrari = new Ferrari( $time );
$johndear = new JohnDear( $time );

echo "The Distance that a car will do for 2 hours is \n" . $car->getDistance( 2 );
echo "The Distance that a Tractor will do for 2 hours is \n" . $traktor->getDistance(2);
echo "The Distance that a Ferrari will do for 2 hours is \n" . $ferrari->getDistance(2);
echo "The Distance that JognDear will do for 2 hours is  \n" . $johndear->getDistance(2);