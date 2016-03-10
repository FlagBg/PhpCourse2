<?php
/**
 * 
 *@brief class employee that represent employee with idl
 *
 *@details: when run the code it is using constructor to create an object
 */
class Employee
{
	/**
	 * 
	 * @param id
	 * @param nextId
	 * 
	 * return int
	 */
	static public $nextId = 1;
	public $id;
	
	
	public function __construct()
	{
		$this->id = self::$nextId++;
	}
	/**
	*@brief class employee that represent employee with idl
	*
	*@details: when run the code it is using constructor to create an object
	*
	*@return int from self::$nextId++
`	*/
}

$angel = new Employee();
$ivan = new Employee();
$dragan = new Employee();

// $angel = tmpfile();
// $angel = fwrite($angel, $id );
// $angel = sys_get_temp_dir();


print $angel->id;
print $ivan->id;
print $dragan->id;
print Employee::$nextId . " ";

?>
