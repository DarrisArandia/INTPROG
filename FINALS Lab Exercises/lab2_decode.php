<?php

	$json_string = '{"name":"Alexis","age":"23","email":"alexis@gmail.com"}';
	
	$object = json_decode($json_string);
	
	$array = json_decode($json_string, true);
	
	echo "Object: " . $object->name . "<br>";
	echo "Array: " . $array["email"];


?>