<?php







//'Sport'=>array('Running','Swimming','Bycling'),

// $names = array(
// 		'Angel' =>array('Age'=>21 ,'Hair'=>'Blonde'), 'Food'=>array('Pizza','Pasta' ), 
// 		'Ivan'  =>array('Age'=>16, 'Hair'=>'Brown'),
//'Dragan'=>array('Age'=>23,'Hair'=>'Red') );



/////////////////////////////////////////////////////////////////////////////////////
$num = 1;
$names  = array('Angel','Ivan','Dragan');//really good example;
foreach ( $names as $value )
{
	print ' Name ' . $num . ' is ' . $value;
	$num++;
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////

//print $names['Angel']['Hair'];

//var_dump($names);
//print_r($names['Angel']['Food']);

//print_r( $names1 );//print * array
//$names1['Angel']= 20;//overwrite;

//print $names['Angel']['Hair'];//print Angel Hair(Id Key)
//print_r($names['Angel']['Hair']);
//var_dump($names['Angel']['Age']);//['Food']);//works up to the second one;//print Angel Age; if i put ['Food'], desnt'work;
//var_dump($names['Angel']['Food']);

//$names1 = array('Angel'=>26,'Ivan'=>33,'Dragan'=>12);




//print_r($names1);

//foreach

//print $names;
//var_dump($names);
//print_r($names);
//print $names;


//$names  = 'Angel(26), Ivan(33), Dragan(12)';
