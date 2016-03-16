<?php

include_once 'Tell.php';
include_once 'NewTell.php';


$ivan = 	new Tell("Ivan Bazukov");

echo "String i posle tochka i promenlivata(propertito)".$ivan->getName();

//pravim vtori obekt ot noviya klas, koyto nasledihme s extend;
$petar = new NewTell("Petar Ivanov");
$proba = new NewTell("sadfasdfasfd");
echo "newTell name is" . $petar->getName();
echo "-----" .$proba->getName();
?>

 /*

//taka bachka! bachka s kef, shtot e lesno! VARIANT BASE1
$ivan = new Tell();
$dragan = new Tell();

//vkarvam imena:

$ivan->setName("Ivan Petkov");
$dragan->setName("Dragan Ivanchov");
//setnahme imenata, dai da gi printnem

echo "Ivan's name is: " .$ivan->getName();
//echo "Ivan's name is: " .getName($ivan);//da vidim dali shte stane naobratno;/ne stava!
//sega i drugiyt:
echo "Dragan's se kazva: " .$dragan->getName();

?>
/*