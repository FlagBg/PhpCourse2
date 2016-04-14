<?php

/**
 * 
 * @author User
 *
 */
interface MovableInterface
{
	/**
	 * @brief	gettint the distance which is the speed * the time
	 *
	 * @param var   $time
	 */
	public function getMaxDistance( $time );
	
	/**
	 * @brief	getting the model of the car
	 * 
	 * @param $model
	 */
	public function getModel();//$type
	
	/**
	 * @brief
	 * 
	 * @param	$name 
	 */
	public function getName();
	
	/**
	 * @brief		
	 * 
	 * @var	double $maxSpeed;
	 */
	public function getMaxSpeed();
	
	//public function getMaxSpeed();
	
	//public function getMaxDistance( $time );

}