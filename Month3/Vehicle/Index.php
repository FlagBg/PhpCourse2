<?php
error_reporting( E_ALL );
ini_set( 'display_errors', '1' );

include_once 'Car.php';
include_once 'Traktor.php';
include_once 'AbstractVehicle.php';

//http://php.net/manual/en/function.arsort.php
$car = new Car("Mercedes Benz", " E-350 ", 300 );//maybe
$car2 = new Car("Ford", "Mustang", 260);
$car3 = new Car("Ford", "Mustang", 125);
$car4 = new Car("Ford", "Mustang", 160);
// or
$carsArray = array();

$carsArray[] = $car->getAllDetails();
$carsArray[] = $car2->getAllDetails();
$carsArray[] = $car3->getAllDetails();
$carsArray[] = $car4->getAllDetails(); 
$carsArray2 = array( $car->getAllDetails() );//exactly this ammendment/// //this ammendment makes possible to get the other value;
//so now we have an array we need to create a second array with just the speeds.
$carSpeedArray = array();     //so at first we put the datas in $carSpeedArray as array,,,,
$i = 0;							//than in here we giving $i as 0 to start the counter from 0 when accessing the array by ID. ok
$t = count($carsArray);			//$t = this is the counter and you put $carsArray MULTIARRAY of OBJECT AND the array that u create

while ($i != $t)		
{
	$arrayId = $i;				//we are putting the ID of the array ,that is 0
	//$carSpeedArray[$arrayId] = $carsArray[$i][0];	
//	$carSpeedArray[$arrayId] = $carsArray[$i][1];
	$carSpeedArray[$arrayId] = $carsArray[$i][0][2]; 
	$i++;					
	//echo $arrayId . "\r\n";

}

arsort($carSpeedArray);
print_r($carSpeedArray);

var_dump($carsArray);
print   "I am a  and my Max speed is " . $car->getMaxSpeed() . " km/h.\n";
$time = 10;
print   " Distance that i am passing for " . $time . " hours is " . $car->getMaxDistance( $time ) . " km.\n";
print  "My name is " . $car->getName() . " and my Model is ". $car->getModel() . "\n";


$traktor = new Traktor("Hello", "It is me", 100);
$traktorArray = array();
$traktorArray[] = $traktor->getAllDatas();//thats the array with all properties
$traktorSpeedArray = array();

$a = 0;
$b = count( $traktorArray );

while ( $a != $b )
{
	$arrayId = $a;
	$traktorSpeedArray[$arrayId] = $traktorArray[$a][2];
	//to put what is what in an array..... you need to understand what is in the array. It needs to have the item you want to compare or
// sort in the third column of the array for that to be valid. Otherwise starting from 0 as the first column, count up to the number
	// that you want to compare, and it'll do the rest for you. 
	// needs practising.... :)))) i am bloody silly Angel... now. 
	$a++;
	
}
print_r($traktorSpeedArray);
//compare and count
//we need again the id;
 
print "Traktor MaxSpeed is " . $traktor->getMaxSpeed(). "\n";
print "Traktor name is... " . $traktor->getName(). "\n";
print "The distance that I am doing for the same time is " . $traktor->getMaxDistance( $time ). " km.\n";


$traktor = new Traktor("Alvin", "King", 20);
print "Traktor MaxSpeed is " . $traktor->getMaxSpeed(). "\n";
print "Traktor name is... " . $traktor->getName(). "\n";
print "The distance that I am doing for the same time is " . $traktor->getMaxDistance( $time ). " km.\n";


//print  "My Speed is " . $car->getMaxSpeed(). "\n";
//print $car->getModel();

//$traktor = new Traktor( $time );

