<?php
class VehicleFactory {
    public static function createVehicle($type, $brand, $model) {
        switch ($type) {
            case 'car':
                return new Car($brand, $model);
                break;
            case 'motorcycle':
                return new Motorcycle($brand, $model);
                break;
            default:
                throw new InvalidArgumentException("Invalid vehicle type");
        }
    }
}
?>