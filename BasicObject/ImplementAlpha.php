<?php


include_once 'IMethodHolder.php';

class ImplementAlpha implements IMethodHolder
{
	public function getInfo( $info )
	{
		echo "This is news! " . $info . "<br/>";
	}
	//ot implementiraniya Interface trugvame da sazdadem edno accessor4ei da vurnem parametar $info./getter
	public function sendInfo( $info )
	{
		return $info;
	}
	//tuk pravim setter na $info
	public function calculate( $first,$second )
	{
		$calculated = $first * $second;
		return $calculated;
	}
	//tuk podavame dva parametara na functiyata calculate i gi presmyatame
	public function useMethods()
	{
		$this->getInfo("The Sky is falling...");
		echo $this->sendInfo("Vote for Senator S!") . "<br/>";
		echo " You  make $" . $this-> calculate(20, 15) . " in your part - time job <br/>";
		//tuk ve4e s $this podavame string na getInfo.......
		//sled tova printirame $this sendInfo i podavame string i nakraya printirame rezultata na funkciyata calculate(kato podavame dva parametara, 20,15Stoynosti).
	}

}
//pravim si obekt! Tozi obekt shte vikne useMethods()
$oncho = new ImplementAlpha();
$oncho ->useMethods();// s ->, che s ravno, t.e $oncho = useMethods() dade edna golyama greshka!
