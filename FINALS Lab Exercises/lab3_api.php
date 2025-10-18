<?php

	header('COntent-Type: application/json');
	
	$user = array(
		"id" => 1,
		"name" => "Alexis",
		"email" => "alexis@gmail.com",
		"status" => "active"
		);
		
	echo json_encode($user);

?>