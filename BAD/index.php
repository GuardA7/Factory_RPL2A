<?php

$car = VehicleFactory::createVehicle("car", "Toyota", "Camry");
echo "Car:\n";
echo "Type: " . $car->getType() . "\n";
echo "Brand: " . $car->getBrand() . "\n";
echo "Model: " . $car->getModel() . "\n\n";

$motorcycle = VehicleFactory::createVehicle("motorcycle", "Honda", "CBR500R");
echo "Motorcycle:\n";
echo "Type: " . $motorcycle->getType() . "\n";
echo "Brand: " . $motorcycle->getBrand() . "\n";
echo "Model: " . $motorcycle->getModel() . "\n";
?>
