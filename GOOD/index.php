<?php

require_once 'VehicleInterface.php';
require_once 'Car.php';
require_once 'Motorcycle.php';
require_once 'VehicleFactory.php';

$car = VehicleFactory::createCar("Toyota", "Camry");
echo "Car:\n";
echo "Type: " . $car->getType() . "\n";
echo "Brand: " . $car->getBrand() . "\n";
echo "Model: " . $car->getModel() . "\n\n";

echo "<br>";

$motorcycle = VehicleFactory::createMotorcycle("Honda", "CBR500R");
echo "Motorcycle:\n";
echo "Type: " . $motorcycle->getType() . "\n";
echo "Brand: " . $motorcycle->getBrand() . "\n";
echo "Model: " . $motorcycle->getModel() . "\n";
?>
