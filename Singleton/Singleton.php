<?php

class Singleton
{
    private static $instance;

    // Private constructor to prevent instantiation from outside
    private function __construct()
    {
        // Prevent direct instantiation
    }

    // Method to get the singleton instance
    public static function getInstance(): Singleton
    {
        if (!self::$instance) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    // Example method
    public function someMethod()
    {
        return "Singleton instance method called";
    }
}
