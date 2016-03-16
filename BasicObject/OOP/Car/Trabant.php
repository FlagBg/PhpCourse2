<?php
include_once 'InterfaceCar.php';

/**
 * 
 * @author User
 * @brief	creating new object;
 * 
 * @param	int $doors;
 * @param	string	text;
 * 
 * @return int $this->doors;array
 * @return string from ::InterfaceCar;
 *
 */
class Trabant implements InterfaceCar
{
	/**
	 * 
	 * @see InterfaceCar::move()
	 *
	 * @details function move() representing moving
	 * 
	 * @return string Text as a proove that moves;
	 */
	public function move()
	{
		return print "I am Trabant and I am moving";
	}
	
	/**
	 * 
	 * @brief 	in case we have Doors that is the function;
	 * 
	 * @param 	int $doors;
	 * 
	 * @return 	int $doors;
	 */
	public function haveDoors( $doors )
	{
		$this->doors = $doors;
	}
	
	/**
	 * @brief	This is the setter of the object as we putting how many doors we have;
	 * 
	 * @param	 int $doors;
	 * 
	 * @return	 int $doors;
	 */
	public function setDoors( $doors )
	{
		$this->doors = $doors;
	}
	
	/**
	 * @brief	getter of the object; 
	 * 
	 * @param int $doors
	 * 
	 * @return number;
	 */
	public function getDoors( $doors )
	{
		return $this->defaultSetTrabantDoors();
		return $this->doors;
	}
	
	/**
	 * @brief	we need the default value of the doors of the car that is coming from the manufacture;
	 * 
	 * @details		We are using the $this->doors = $this->doors + 2, which means that is always 2;
	 * 
	 * return 	int $doors; 
	 */
	public function defaultSetTrabantDoors()
	{
		
		$this->doors = $this->doors + 2;
		return $this->doors;
	}
}






