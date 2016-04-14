
<form action = "index.php" method = "GET">
	<label for="name">Name:</label><br><input type = "text" name ="name"><br>
	<label for="age">Age:</label> <br><input type = "text" name ="age" size="5"><br>
	<label for="pass">TestPass</label><br><input type = "password" name="password"><br>
	<label for="text">Text3</label><br><input type ="text" name="mytext" size=3 maxlength=5><br>
	<br><label for="radioButton"></label><input type = "radio" name="sex" value = M>Male
	<label for="radioButton"></label><input type = "radio" name="sex" value = F>Female
	<br><label for="radioButton2"></label><input type = "radio" name="OS" value = "Windows">Windows;
	<label for ="radioButton2></label><input type = "radio" name="OS" value = "Linux">Linux;
	<label for =|radioButton2></label><input type ="radio" name="OS" value = "Mac OS">Mac;
 	<br><br>
	<label for="checkbox"></label><input type = "checkbox" name="checkB" checked value=yes>I agree
	<input type = "submit" value="Submit">
</form>
<?php

error_reporting( E_ALL );
ini_set( 'display_errors', '1' );


//echo $_GET['username']
//$username = "Denis";

//echo PHP_DEBUG;
//echo PHP_VERSION;

// print $username;
// var_dump($username);
// echo 'Denis';




$name 		= $_GET['name']; 
$age  		= $_GET['age'];
$checkBox 	= $_REQUEST['checkB'];


// if ( !isset( $_GET['sex']) )
// {
// 	die('please specify your sex');
// }
// else 
// 	switch ( $_GET['sex'] )
// 	{
// 		case 'M':
// 			print 'Male ';
// 			break;
// 		case 'F':
// 			print 'Female ';
// 			break;
			
// 		default:
// 			print 'choosed M/F, please ';
// 			break;
// 	}

switch ( isset( $_GET['OS']) )
{
	case '1':
		print 'Windows ';
		break;
		
	case '2':
		print 'Linux ';
		break;
		
	case '3':
		print 'Mac ';
		break;
		
	default: Print 'Choose OS ';
		break;
}

 if( isset ( $name) && isset( $age ) && isset( $checkBox) &&!empty( $name ) &&!empty ( $age ) &&!empty( $checkBox ) )
{
	echo 'I am ' .$name . ' and I am ' . $age . ' years old ';
}else 
{
	echo 'Please write something';
}
 
echo 'I am ' .$name . ' and I am ' . $age . ' years old ';


echo $_GET['name'];
echo $_GET['age'];

