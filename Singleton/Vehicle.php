<?php

class Vehicle
{
    private static $instance;
    private $type;

    // Private constructor to prevent instantiation from outside
    private function __construct($type)
    {
        $this->type = $type;
    }

    // Method to get the singleton instance
    public static function getInstance($type): Vehicle
    {
        if (!self::$instance) {
            self::$instance = new static($type);
        }
        return self::$instance;
    }

    // Example method to get the vehicle type
    public function getType()
    {
        return $this->type;
    }
}
