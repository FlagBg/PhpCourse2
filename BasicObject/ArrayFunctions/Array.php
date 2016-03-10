<?php
/**
 * 
 * @author Class that contains basic array functions;
 *
 */
class ArrayS
{
	/**
	 * 
	 * @param	string $arrLenght;
	 * 
	 * @param 	count( function that counts );
	 * 
	 *  return  string $cars;
	 *  
	 *  function that print the array;
	 */
	public $cars = array( "BMW", "VOLVO", "TOYOTA", "MAZDA" );
	
	public $arrLenght;
	
	function count( $cars)
	{
		return $arrLength;
		for ( $x=0; $x<$arrayLenght; $x++)
		{
			echo $cars[ $x ];
			echo " ";
		}
	}
	
	
	
}

$obj1 = new ArrayS(  $cars );
$obj1->arrLength;
$obj1->count($arrLength, true);
//echo $obj1;
print_r($car);
var_dump($obj1, TRUE);

/* $cars1 = array
(
		array("Mazda",22,18),
		array("Volvo",15,12),
		array("Nissan",10,8),
		array("BMW",18,12),
		array("Mercedes",14,11)
);

echo $cars1[0][0].": In stock: ".$cars1[0][1].", sold: ".$cars1[0][2].".<br>";
echo $cars1[1][0].": In stock: " .$cars1[1][1].", sold: " .$cars1[1][2].".<br>";
echo $cars1[2][0].": In stock: ".$cars1[2][1].", sold: ".$cars1[2][2].".<br>";
echo $cars1[3][0].": In stock: ".$cars1[3][1].", sold: ".$cars1[3][2].".<br>";
echo $cars1[4][0].": In stock: ".$cars1[4][1].", sold: ".$cars1[4][2].".<br>";


for ($row = 0; $row <  4; $row++) {
	echo "<p><b>Row number $row</b></p>";
	echo "<ul>";
	for ($col = 0; $col <  3; $col++) {
		echo "<li>".$cars1[$row][$col]."</li>";
	}
	echo "</ul>";
}
for($row = 0; $row <5; $row++){
	echo "Row number $row";
	for($col=0; $col<3; $col++){
	echo $cars1[$row][$col];
		


	$cars = array("Mazda", "Volvo", "Nissan", "Bmw", "Mercedes");
$arrlenght = count($cars);

for($x = 0; $x < $arrlenght; $x++){
	echo $cars[$x];
	echo "<br>";
} */