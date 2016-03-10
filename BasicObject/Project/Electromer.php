<?php

include_once 'InterfaceElectromer.php';
/**
 * 
 * @Brief This is a electrometer with two datas shows;
 * 
 * @details		when designing the electometer we actually some datas that are shown; 
 *
 */
class Electromer implements InterfaceElectromer
{
	/**
	 * @var float $dayRateValue;
	 * @var float $nighRateValue;
	 * @var float $priceDayRate;
	 * @var float $priceNightRate;
	 */
	protected $dayRateValue;      //kw
	protected $nightRateValue;		//kw 
	protected $priceDayRate = 1.23;
	protected $priceNightRate = 0.87;
	
	
	
	
	/**
	 * 
	 * @param unknown $dayRateValue
	 * @param unknown $nightRateValue
	 */
	public function __construct( $dayRateValue, $nightRateValue)
	{
		$this->dayRateValue =	$dayRateValue;
		$this->nightRateValue = $nightRateValue;
		return print 'I am the Meter... my datas are: Day rate is:' . $this->dayRateValue . "." . "My night Rate is " .
				$this->nightRateValue . " ";
	}
	
	/**
	 * 
	 * @param float $dayRateValue
	 * 
	 * @return float;
	 */
	public function setDayRateValue( $dayRateValue )
	{
		$this->dayRateValue = $dayRateValue;
	}
	
	/**
	 * 
	 * @param float $nightRateValue
	 * 
	 * @return float;
	 */
	public function setNightRateValue( $nightRateValue )
	{
		$this->nightRateValue = $nightRateValue;
	}
	
	/**
	 * 
	 * @var float $this->nightRateValue;
	 */
	public function getNightRateValue()
	{
		return $this->nightRateValue;
	}
	
	/**
	 * @oaram float $getDayRateValue;
	 * 
	 * @return float
	 */
	public function getDayRateValue()
	{
		return $this->dayRateValue;
	}
	
	
	/**
	 * @brief	calculating the tariff for the day!
	 * 
	 * @param	float $priceDayRate
	 * @param	float $dayRateValue
	 * 
	 * @return float $result		
	 * @see InterfaceElectromer::priceDayRateValue()
	 */
	public function priceDayRateValue()
	{
		$result = $this->priceDayRate * $this->dayRateValue;
		
		return  $result; 		  
	}
	/**
	 * @brief	calculating the tariff for the night!
	 *
	 * @param	float $priceDayRate
	 * @param	float $dayRateValue
	 *
	 * @return float $result
	 * @see InterfaceElectromer::priceDayRateValue()
	 */
	public function priceNightRateValue()
	{
		$result = $this->priceNightRate * $this->nightRateValue;
		
		return $result;// . "Cena Noshtna Tarifa: "; //. $result = $this->priceNightRate * $this->nightRateValue;
	}
	
}

