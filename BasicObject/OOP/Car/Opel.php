<?php
include_once 'Car.php';
/**
 * 
 * @brief this is an object opel that contains param. It represents objects that moves;
 *
 * @param	int $doors;
 * @param	string	functionality from interface;
 */

//class Opel extends Car implements InterfaceCar
class Opel extends Car
{
	function move()
	{	
		return "My brand is Opel. I am moving...";
	}
	
	protected function defaultDoors()
	{
		return 3;
	}
	
	public function opelDoors()
	{
		print $this->haveDoors();
	}
	
// 	public function defaultDoors()
// 	{
// 		return 3;
// 	}
	
	
}