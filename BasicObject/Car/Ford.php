<?php
include_once 'InterfaceCar.php';

/**
 * 
 * @Brief This class create object and implements the interface
 * 
 * @details	we create an object with doors and functionalty
 */
class Ford implements InterfaceCar
{
	/**
	 * @
	 * @var int $doors;
	 */
	protected $doors;
	//public $doors;
	/**
	 * @create object Ford 
	 * @see InterfaceCar::move()
	 *
	 * @return	string; int;
	 */
	public function move()
	{
		/**
		 * @brief		implements interface;
		 * 
		 * @return		string;
		 */
		return "I am proud to be Ford. I am moving...";
	}
	
	/**
	 * @brief - function that calculate the number of doors;
	 * 			we have in general at least two doors for all cars;
	 * 			that is why we put default value = 2(doors);
	 * @param	int $doors;
	 */
	public function haveDoors( $doors )
	{
		
		$result = $this->doors . "I have . $this->doors . with me";
	}
	
	public function setDoors( $doors )
	{
		$this->doors = $doors;
	}
	
	protected function defaultDoors()
	{
		$this->doors = $this->doors + 2;
		
	}
	
	public function getDoors()
	{
		$this->defaultDoors();
		return $this->doors . " ";
	}
	
}