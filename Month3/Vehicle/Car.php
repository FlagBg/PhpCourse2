<?php

/**
 * @brief 	class Car is the object car
 * 
 */

include_once 'AbstractVehicle.php';

/**
 * 
 * @brief	Object Car that is the car with basic params that we have
 *
 */
class Car extends AbstractVehicle
{
	/**
	 * 
	 * @param	double  $maxSpeed;
	 */
	protected $maxSpeed;
	
	/**
	 * 
	 * @param string	$model
	 */
	protected $model;
	
	/**
	 * 
	 * @param string 	$name
	 */
	protected $name;
	
	/**
	 * 
	 * @param  int		$time
	 */
	protected $time;
	
	
	
	/**
	 * @brief	using constructor to create the object with no hardcode inside; more easy, more efficient;
	 * @param 	string $name
	 * @param 	string $model
	 * @param 	double $maxSpeed
	 * @param 	int	    $time
	 */
	public function __construct( $name, $model, $maxSpeed )
	{
		$this->name     		= $name;
		$this->model    		= $model;
		$this->maxSpeed 		= $maxSpeed;
		//$this->time 			= $time;
	}
	
	/**
	 * @brief 	setter;
	 * @param string $name
	 */
	public function setName( $name )
	{
		$this->name = $name;
	}
	
	/**
	 * @brief 	getter
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * @brief		setter	
	 * 
	 * @param string $model
	 */
	public function setModel( $model )
	{
		$this->model = $model;
	}
	
	/**
	 * @brief	getter
	 * 
	 * @param	string
	 */
	public function getModel()
	{
		return $this->model;
	}
	
	
	/**
	 * @brief	setter
	 * @param double $maxSpeed
	 */
	public function setMaxSpeed( $maxSpeed )
	{
		$this->maxSpeed = $maxSpeed;
	}
	
	/**
	 * @brief 	to get the datas as array we need to put function that create array;
	 */
	public function getAllDetails()
	{
		return array($this->name, $this->model, $this->maxSpeed);//that make sense
		
	}
	
	public function getMaxSpeed()
	{
		/**
		 * @brief 	getTheMax speed as param!
		 * 
		 * @return double $maxSpeed
		 */
		return $this->maxSpeed;
		//$this->maxSpeed;
	}
	
	/**
	 * @brief 	settter
	 * @param int $time
	 */

}
	/**
	 * @brief 	setModel
	 * 
	 * @param 	string $model
	 */
// 	public function setModel( $model )
// 	{
// 		$this->model = $model;
// 	}
	
// 	public function getModel()
// 	{
// 		return "Ford";
// 		//return $this->model;
		
 //   }
// 	public function getModel( $model )
// 	{
// 		//getter//setter or directly $type;
// 		return "Ford";
// 		//could be:
// 		//$model = "My model is ". "$this->model;
		
// 	}
		
