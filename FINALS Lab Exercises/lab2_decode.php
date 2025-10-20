<?php
$json_string = '{"name":"CarMichael Polancos","age":21,"email":"polancoscarmichael_bsit@plmun.edu.ph"}';

// Step 3a: Decode JSON into a PHP object
$obj = json_decode($json_string);

// Step 3b: Decode JSON into a PHP associative array
$arr = json_decode($json_string, true);

// Step 4: Display individual values
echo "Object: " . $obj->name . "<br>";
echo "Array: " . $arr['email'];
?>
