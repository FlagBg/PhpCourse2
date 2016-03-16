<?php

include_once 'FiguresInterface.php';

class rectangle //implements FiguresInterface
{
	public $length;
	public $width;
	
	public function __construct ($lenght, $width )
	
	{
		$this->length = $lenght;
		$this->width = $width;
	}
	
	public function createObject( $length, $width )// $a, $b )
	{
		//$rectangle = ( $length * $width );
		
		return  "I am rectangle and my Lenght is  " . $this->length . " and my Width is: " . $this->width ;
		
// 		return "I am Rectangle and my Size is: Length * Width = " 
// 				 . $this->length  * $this->width ;
// 		return $a * $b;
	}
	
// 	public function perimeter()
// 	{
// 		echo "Length: " . $this->lenght;
// 		echo "Width: " . $this ->$width;
// 		return "Perimeter: " . $this->lenght + $this->width;
// 	}
	
}
//creating object:
$myRectangle	= new rectangle( 10, 5 );
$myRectangle1	= new rectangle( 5, 8  );
$myRectangle2	= new rectangle( 3, 2 );

echo $myRectangle->createObject();
echo $myRectangle1->createObject();
echo $myRectangle2->createObject();

