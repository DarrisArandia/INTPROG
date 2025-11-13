<?php
// -----------------------------------------------------------
// team_data.php
// Outputs team data in JSON format for XMLHttpRequest / Fetch
// -----------------------------------------------------------

// Set response type to JSON
header('Content-Type: application/json');

// Team members data
$team = [
    [
        "name" => "KENT ASHLEY SUAREZ",
        "image" => "kent.jpg",
        "location" => "Poblacion, Muntinlupa City",
        "github" => "https://github.com/KentAshley444"
    ],
    [
        "name" => "ALEXIS DARRIS ARANDIA",
        "image" => "darris.jpg",
        "location" => "Alabang, Muntinlupa City",
        "github" => "https://github.com/DarrisArandia"
    ],
    [
        "name" => "CARMICHAEL POLANCOS",
        "image" => "khelo.jpg",
        "location" => "San Pedro, Laguna",
        "github" => "https://github.com/CarMichaelPolancos"
    ]
];

// Encode the PHP array as a JSON object and print it
echo json_encode($team, JSON_PRETTY_PRINT);
?>
