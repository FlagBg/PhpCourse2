<?php

class Tell
{
	
	var 			$name;
	protected 		$egn;
	private 		$pin;
	//constructor/getter/setter,accessors
	
	function __construct($personName)
	{
		$this->name = $personName;
	}
	
	function setName($newName)
	{
		$this->name = $newName;
	}
	
	function getName()
	{
		return $this->name;
	}
	//sega kak da gepim protected i private.... mi pravim takava functiya yavno
	protected function getEgn()
	{
		return $this->egn;
	}
	
	private function getPin()
	{
		return $this->$pin;
	}
	
	
	
	
	
}
/*
//vtori variant s constructor ei taka da ima praktika!
class Tell
{
	var $name;
	
	function __construct($hisName)
	{
		$this->name = $hisName;
	}
	
	function setName($newName)
	{
		$this->name = $newName;
	}
	
	function getName()
	{
		return $this->name;
	}
	
}


/* variant BASE1
//taka bachka, s getter i setter... ta da vidim __construct - nagere!
class Tell
{
	//datas vkarvam si chovek;
	var $name;
	
	//method
	//getter and setter
	function setName( $newName )
	{
		$this->name = $newName;
	}
	//use $this to access properties and to call other methods of the current class
	function getName()
	{
		return $this->name;
	}
	
	
}



/*
class Tell
//playing visibility
{
	
	public $rate;
	public $duration;
	public $capital;

	//constructor;
	private function __construct()
	{
		$this->rate = $rate;
		$this->duration = $duration;
	}
}
	
$objTell - new Tell(2,5, 7);//shte grumne ta, functiyata e private a nie otvun podavame stoynosti;
//fatal error - calling to private Tell();
	

/*---------------------------------------------------------------


class Tell{
		
	}
	public $rate;
	public $duration;
	public $capital;
	
	/*
	 * create constructor inClass{
	 * 
	 * 		public functin __construct()
	 * 		{
	 * 			$this->rate = 3;
	 *  		$this->duration =4;
 * 			}
	 * }
	 * 
	 * 
----------------------------------------------
	public function calculateInterest()
	{
		$rate = 5;
		return ($this->rate*$this->duration*$this->$capital)/100;
				
	}
	
	
	//$objClass1 = new Tell();
	
	//$objClass2 = new Tell();
	
		
		
}

/*
--------------------------------------
class Tell
{
	public $abc;
	public function Tell()
	{
		return $this->abc;
	}
	
}

------------------------------------------------------
class Tell
{


public $variable1;
private $variable2;

	public function mergeVariable($thirdVar) //suzdavame treta promenliva, koyato e functiya ot $variable1 . $variable 2, a samata functiya, fakticheski umnojava rezultata.
	{
		return $this->variable1 . $this->variable2 . $thirdVar;
	}


}


-----------------------------------------------------------------


public $variable1;
private $variable2;

	public function mergeVariable()
	{
		return $this->variable1 . $this->variable2;		
		echo mergeVariable();
	}

}



--------------------------------------------------------------------
class Tell
{
	var $variable1;
	var $variable2;
	
	function mergeVariable()
	{
		return $this.$variable1 . $variable2;
	}
	
}

-----------------------------------------------------------------------


//continue creating objects review for two hours




 * 
 
class Tell
{
	private $userAgent;
	
	public function __construct()
	{
		$this->userAgent=$_SERVER['HTTP_USER_AGENT'];
		echo $this->userAgent;
	}
	
}
	$tell = new Tell();
	
?>
*/