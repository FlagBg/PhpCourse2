<?php

//phpinfo();

/**
 * 
 * @Basic test of a new beek; This class shows Objects and if/else conditional statements;
 *  function printA and if/else
 *  
 *
 */

class Test
{
	/**
	 * 
	 * @details When starting the oplication we returning String of condition;
	 * @param	int $age;
	 */
	public $age = 20;
	public $name = "Angel";
	
	
	//$this->age = $age;

	/**
	* @brief		shows the result from age;
	*
	* @details		The String contains results of the condition that we provide in the functuion;
	*
	* @param	int $age;
	*
	* return	->String;
	*
	* if/else	checks exactly what condition we have; if is<18,
	*/
	public function printA( $age )
	{
		
	if ( $age < 18 )
	{
		print " You are young - enjoy it!\n";
	}
	
	if ( $age >= 18 && $age < 50 )//if is >= ili different from <50, etc (18-50);
	{
		print "You are in the prime of your life. You age is: " . $age ;
	}
	else 
	{
		print "You are not in the prime of your life \n";
	}
	
	if ( $age >= 50 )
	{
		print "You can retire soon -Yeap!\n";
	}
	else 
	{
		print "You cannot retire soon :( ";	
	}

	if ( $age < 10 )
	{
		print " You are under 10";
	}
	elseif ( $age < 20 )
	{
		print "You are under 20";
	}
	elseif ( $age < 30 )
	{
		print "You are under 30";
	}
	elseif ( $age < 40 )
	{
		print "You are under 40";
	}
	else 
	{
		print "You are over 40";
	}
	
	}
	
	/**
	* @brief		This one check if provided name is inside or not
	* 
	* @param  String $name
	* @return String
	*/
	public function secondCondition( $name )
	{
		//$this->age = $age;
		
		if ( $name == "Jim" )
		{
			print "Your name is Jim\n";
		}		
		
		else
		{
			if ( $name == "Linda" )
			{
				print " Your name is Linda\n ";
			}
			else
			{
				if ( $name == "Bob" )
				{
					print "Your name is Bob\n";
				}	
				else 
				{
					if ( $name == "Sally" )
					{
						print "Your name is Sally\n";
					}
					else 
					{
						print "I do not know your name!";
					}
				}
			}
			
		} 
	}
	
	/**
	 * @brief Checking name with switch/case function;
	 * @param String $name;
	 * 
	 * @return	string 
	 */
	
	public function switchCase( $name )
	{
		
		 switch ( $name )
		 {
		 	case "Jim" : print "Your name is Jim\n"; 
		 	break;
		 	
		 	case "Linda": print "Your name is Linda\n";
		 	break;
		 	
		 	case "Bob": print "Your name is Bob\n";
		 	break;
		 	
		 	case "Sally": print "Your name is Sally\n";
		 	break;
		 	
		 	default: print "I Do not know your name";
		 }
	}
}


?>
