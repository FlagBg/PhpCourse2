<?php

//include_once 'AbstractFigures.php';

class Trapezoid
{
	public $baseA;
	public $baseB;
	public $sideC;
	public $sideD;
	public $altitude;

	public function __construct( $baseA, $baseB, $sideC, $sideD, $altitude )
	{//opisvam parametrite na obekta, koito podadoh v konstruktora.
		$this->baseA = 		$baseA;
		$this->baseB = 		$baseB;
		$this->sideC = 		$sideC;
		$this->sideD = 		$sideD;
		$this->altitude = 	$altitude;
	}
	
	public function area()//poneje tova mi e funcktiyata v abstraktniyt klas, v interfeisa ottuk si e opisvam
	{
		return "Hi, I'm Trapezoid and my area is " . ($altitude * (($baseA +$baseB)/2)) ." sq. sm";
	}
	
	public function perimeter()
	{
		return "Hi, I'm Trapezoid and my perimeter is: " . ($base + $baseB + $sideC + $sideD);
	}
}

//creating the Trapezoid;
//$trapezoid =  new Trapezoid( 3.5, 9 , 10.5 , 8, 7.5 );
//$trapezoid1 = new Trapezoid( 18 , 8 , 8 , 6, 5 );

//echo $trapezoid-> trapezoidCreation();
//echo $trapezoid1->trapezoidCreation( $sideA , $sideB, $sideC, $sideD, $altitude);
