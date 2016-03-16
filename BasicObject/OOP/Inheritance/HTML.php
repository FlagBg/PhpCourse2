<?php

/**
 * 
 * @brief Creating class with parametres and function;
 * 
 * *var String 
 */

class HTML
{
	protected   $name;
	public 	    $id		;
	private 	$with;
	
	protected function basicAttribute()
	{
		return "name = '$this->name' id='$this->id'";
	}

}