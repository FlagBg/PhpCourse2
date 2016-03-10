<?php
include_once 'Car.php';
/**
 * 
 * @brief: Class Renault is a object that I represent;
 * 
 * @param	string -> text;
 * @param	int	$doors; 
 *
 */
class Renault extends Car
{
	/**
	 * 
	 * @brief see MovableInterface::move()
	 * 
	 * @details	when the object is called it;s returning text to show his self;
	 * 
	 * @return string -> text;
	 */
	public function move()
	{
		return print  "I am Renault and I am moving ";	
	}
	
	/**
	 * @brief		extends abstract function defaultDoors() which is exactly define
	 * 				in abstract class Car;
	 * @ Car::defaultDoors(
	 * @ details: 	we are putting how many doors we have over the default value;
	 * 
	 * @return	int door;
	 */
	protected function defaultDoors()
	{
		return 1;
	}
	/**
	 * @brief 	function that exactly calculate how many doors we have using the abstract class
	 * 
	 * @details		shows how many doors this renault has;
	 * 
	 * @param int;
	 * @return int;	
	 */
	public function renaultDoors()
	{
		print $this->haveDoors();
	}
}
