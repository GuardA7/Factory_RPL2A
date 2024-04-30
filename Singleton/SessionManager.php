<?php

require_once 'Singleton.php';

class SessionManager extends Singleton
{
    private $sessionId;
    private $data = [];

    // Private constructor to prevent instantiation from outside
    private function __construct($sessionId)
    {
        $this->sessionId = $sessionId;
    }

    // Method to get the singleton instance with a specific session ID
    public static function getInstance($sessionId): SessionManager
    {
        if (!isset(self::$instances[$sessionId])) {
            self::$instances[$sessionId] = new static($sessionId);
        }
        return self::$instances[$sessionId];
    }

    // Example method to set session data
    public function set($key, $value)
    {
        $this->data[$key] = $value;
    }

    // Example method to get session data
    public function get($key)
    {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    // Example method to get session ID
    public function getSessionId()
    {
        return $this->sessionId;
    }
}
