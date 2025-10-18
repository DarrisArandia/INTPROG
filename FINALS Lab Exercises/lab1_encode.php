<?php
	
	$student = array(
		"name" => "Alexis",
		"age" => "23",
		"course" => "BSIT"
		);
		
	$json_data = json_encode($student);
	
	echo $json_data;
?>