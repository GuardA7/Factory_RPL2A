<?php

require_once 'Vehicle.php';

// Penggunaan Vehicle
$car = Vehicle::getInstance('Car');
$bike = Vehicle::getInstance('Bike');


var_dump($car === $bike); 

echo $car->getType() . "\n"; 
echo $bike->getType() . "\n"; 
