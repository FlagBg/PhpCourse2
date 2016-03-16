<?php
/**
 *
 * @brief Creating subclass extends the parent with create object function;
 *
 * *var String
 */
include_once 'HTML.php';

class HTMLdiv extends HTML
{
	
	public function __construct( $name,$id)
	{
		$this->name = $name;
		$this->id	= $id;
	}
	
	
	public function getDiv( $content )
	{
		$this->basicAttribute();
		return "<$basicAttribute>$content>";
	}
	
}

$objDiv = new HTMLdiv($name, $id);
$objDiv1 = new HTML();


