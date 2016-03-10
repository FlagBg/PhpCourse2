<?php

class cpage
{
	private $title;
	private $content;
	
	public function __construct( $title )
	{
		$this->title = $title;
	}
	
	public function __destruct()
	{
		
	}
	
	public function __render()
	{
		echo "<H1>{$this->title}</H!>";
		echo $this->content;
	}
	
	public function setContent( $content )
	{
		$this->content = $content;
	}
}

?>
