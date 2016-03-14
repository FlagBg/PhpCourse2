<?php

include_once 'Database.php';
include_once '..helpers/Electromer.php';

Class ElectromerModel
{
	
	public function __construct()
	{
		$this->db = Database::getInstance();
	}
	
	public function createElectromer( $id, $dayRateValue, $nightRateValue)
	{
		$sql = ' SELECT * FROM `electrometer ';
		
		$stmt	=	$this->db->prepare( $sql );
		
		$result = $stmt->execute( array( $username, $password ) );
		
		if ( $result )
		{
			if ( $stmt->rowCount() > 0 )
			{
				$rows = $stmt->fetchAll( PDO::FETCH_ASSOC);
				$user = array_pop( $rows );
				
				return new Electromer($electromer['id'], $electromer['dayRateValue'], $electromer['nightRateValue']);
			}
			else 
			{
				return false;
			}
			
			
		
			//
			//else return false;
		}
	
		//spored Bojo da suzdam edin metod, koyto da mi raboti s bazata danni i 
		//da pravi zayavka v bazata danni, kakto i da insertva kum neya, a v drugoto
		//samo da podavam i promenyam.
	}
	
	
	
	
	
	
}