<?php

class VehicleFactory {
    public static function createCar(string $brand, string $model): string {
        $car = new Car($brand, $model);
        return "Type: Car<br>Brand: " . $car->getBrand() . "<br>Model: " . $car->getModel()."<br><br>";
    }

    public static function createMotorcycle(string $brand, string $model): string {
        $motorcycle = new Motorcycle($brand, $model);
        return "Type: Motorcycle<br>Brand: " . $motorcycle->getBrand() . "<br>Model: " . $motorcycle->getModel() . "\n\n";
    }
}
