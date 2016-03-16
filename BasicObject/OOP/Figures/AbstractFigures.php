<?php

//include_once 'FiguresInterface.php';

//abstract class Figures implements figureInterface

include_once 'FiguresInterface.php';

abstract class AbstractFigures implements figuresInterface 
{
	/**
	 * @brief		This variable holds the value for the perimeter. 
	 * 
	 * @var			float size
	 */
	protected  $per;
	
	/**
	 * @brief		This variable represents the face of figure.
	 * 
	 * @var			float face
	 */
	protected  $face;
	
	abstract public function lice();
	
	abstract public function perimeter();
	
}