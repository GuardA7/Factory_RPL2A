<?php

class Motorcycle implements VehicleInterface {
    private string $brand;
    private string $model;

    public function __construct(string $brand, string $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getBrand(): string {
        return $this->brand;
    }

    public function getModel(): string {
        return $this->model;
    }
}
