<?php

	$json_input = file_get_contents('php://input');
	
	$data = json_decode($json_input, true);
	
	echo "Username: " . $data["username"] . "<br>";
	echo "Password: " . $data["password"]; 
	
?>