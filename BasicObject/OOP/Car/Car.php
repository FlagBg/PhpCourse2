<?php
include_once 'InterfaceCar.php';
/**
 * @brief Abstract class that collect all information about objects;
 * 		  Contains method that holds default value for doors and calculate 
 * 		  all values for all specific objects
 *
 */
abstract class Car //implements InterfaceCar
{
		/**
		 * @brief		this methos is specific for all objects/they have doors/ default value is 2;
		 * 
		 * @param		int	$doors;
		 * @param		int $result;
		 */
	//implements InterfaceCar
	abstract protected function defaultDoors();
	
	/**
	 * @brief		function that calculate doors for all objects;
	 * @param	$this->defaultDoors = $result;
	 * @return	 int $result
	 */
		
	protected function haveDoors()
	{
		/**
		 * @brief		 final function that calculate how many doors we have in objects;
		 * 
		 * @param 	int defaultDoors() that we put the object itself;
		 * @param 	int
		 * @return	int $result;
		 */
		$result = $this->defaultDoors() + 2;
		
		return "My doors are: " . $result;

	}
}
