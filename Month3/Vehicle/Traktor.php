<?php

include_once 'AbstractVehicle.php';

/**
 * 
 * @brief	object Traktor User
 *
 */
class Traktor extends AbstractVehicle
{
	/**
	 * 
	 * @var string $name
	 */
	protected $name;
	
	/**
	 * 
	 * @var double $maxSpeed
	 */
	protected $maxSpeed;
	
	/**
	 * 
	 * @var string $model;
	 */
	protected $model;
	
	
	/**
	 * @brief	creating object 
	 * 
	 * @param string $name
	 * @param string $model
	 * @param double $maxSpeed
	 */
	public function __construct( $name, $model, $maxSpeed )
	{
		$this->name 		= $name;
		$this->model 		= $model;
		$this->maxSpeed 	= $maxSpeed;
		
	}
	
	/**
	 * @brief 	setter
	 * 
	 * @param double  $maxSpeed
	 */
	public function setMaxSpeed( $maxSpeed )
	{
		$this->maxSpeed = $maxSpeed;
	}
	
	/**
	 * @brief 	getter
	 * 
	 * @see AbstractVehicle::getMaxSpeed()
	 */
	public function getMaxSpeed()
	{
		return $this->maxSpeed;
	}
	
	
	/**
	 * @brief 	setter
	 * 
	 * @param string $name
	 */
	public function setName( $name )
	{
		$this->name = $name;
	}
	
	/**
	 * @brief 	getter
	 * 
	 * @see MovableInterface::getName()
	 */
	public function getName()
	{
		return $this->name;
	}
	
	/**
	 * @brief  setter
	 * @param string $model
	 */
	public function setModel( $model )
	{
		$this->model = $model;
	}
	
	/**
	 * @brief  getter
	 * 
	 * @see MovableInterface::getModel()
	 */
	public function getModel()
	{
		return $this->model = $model;
	}
	
	public function getAllDatas()
	{
		return array( $this->name, $this->model, $this->maxSpeed );
	}
	
}