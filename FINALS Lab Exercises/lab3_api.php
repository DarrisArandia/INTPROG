<?php
header('Content-Type: application/json');

$user = array(
    "id" => 23151060,
    "name" => "CarMichael Polancos",
    "email" => "polancoscarmichael_bsit@plmun.edu.ph",
    "status" => "active"
);

echo json_encode($user);
?>
