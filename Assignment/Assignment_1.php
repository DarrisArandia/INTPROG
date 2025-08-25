<?php
// IF statement
$allowance = 50;
$jeepneyFare = 12;

if ($allowance >= $jeepneyFare) {
    echo "You have enough money to ride the jeepney.<br>";
}

// IF...ELSE statement
$allowance = 20;
$jeepneyFare = 15;

if ($allowance >= $jeepneyFare) {
    echo "You can ride the jeepney.<br>";
} else {
    echo "Not enough money for the jeepney fare. You might need to walk.<br>";
}

// IF...ELSEIF...ELSE statement
$allowance = 100;

if ($allowance >= 100) {
    echo "You can buy lunch at Jollibee.<br>";
} elseif ($allowance >= 50) {
    echo "You can eat at the school canteen.<br>";
} elseif ($allowance >= 20) {
    echo "You can only buy snacks.<br>";
} else {
    echo "Your allowance is too small, you need to budget carefully.<br>";
}

// SWITCH statement
$meal = "Siomai";

switch ($meal) {
    case "Adobo":
        echo "You chose Adobo.<br>";
        break;
    case "Sinigang":
        echo "You chose Sinigang.<br>";
        break;
    case "Jollibee":
        echo "You chose Jollibee.<br>";
        break;
    case "Siomai":
        echo "You chose Siomai.<br>";
        break;
    default:
        echo "That meal is not on the menu.<br>";
}
?>
