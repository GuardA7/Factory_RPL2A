<?php

require_once 'DatabaseConnection.php';
require_once 'SessionManager.php';

// Penggunaan DatabaseConnection
$dbInstance1 = DatabaseConnection::getInstance();
$dbInstance2 = DatabaseConnection::getInstance();

// Koneksi ke database yang sama
var_dump($dbInstance1 === $dbInstance2); // Output: true

echo $dbInstance1->getConnection() . "\n"; // Output: Database connection established
echo $dbInstance1->query("SELECT * FROM table_name") . "\n"; // Output: Query executed: SELECT * FROM table_name

// Penggunaan SessionManager
$session1 = SessionManager::getInstance("session_id_1");
$session2 = SessionManager::getInstance("session_id_2");

// $session1 dan $session2 adalah instance yang berbeda dengan data yang terpisah
$session1->set("user", "John");
$session2->set("user", "Alice");

echo "User in session 1: " . $session1->get("user") . "\n"; // Output: User in session 1: John
echo "User in session 2: " . $session2->get("user") . "\n"; // Output: User in session 2: Alice

echo "Session ID for session 1: " . $session1->getSessionId() . "\n"; // Output: Session ID for session 1: session_id_1
echo "Session ID for session 2: " . $session2->getSessionId() . "\n"; // Output: Session ID for session 2: session_id_2
