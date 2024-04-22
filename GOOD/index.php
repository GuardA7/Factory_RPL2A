<?php

require_once 'VehicleInterface.php';
require_once 'Car.php';
require_once 'Motorcycle.php';
require_once 'VehicleFactory.php';

$output = VehicleFactory::createCar("Toyota", "Camry");
$output .= VehicleFactory::createMotorcycle("Honda", "CBR500R");

echo $output;
?>
