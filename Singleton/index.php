<?php

require_once 'Vehicle.php';

// Penggunaan Vehicle
$car = Vehicle::getInstance('Car');
$bike = Vehicle::getInstance('Bike');

// Kedua instance akan sama
var_dump($car === $bike); // Output: true

echo $car->getType() . "\n"; // Output: Car
echo $bike->getType() . "\n"; // Output: Car (karena keduanya merupakan instance yang sama)
