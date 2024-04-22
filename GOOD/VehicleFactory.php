<?php

class VehicleFactory {
    public static function createCar($brand, $model) {
        return new Car($brand, $model);
    }

    public static function createMotorcycle($brand, $model) {
        return new Motorcycle($brand, $model);
    }
}
