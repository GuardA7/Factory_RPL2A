<?php

class Motorcycle implements VehicleInterface {
    private $type = 'Motorcycle';
    private $brand;
    private $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getType() {
        return $this->type;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }
}
