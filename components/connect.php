<?php

$db_host = 'localhost'; // Database host (usually 'localhost' for local development)
$db_name = 'food_db';   // Database name
$db_user = 'root';      // Database username
$db_pass = '';          // Database password (leave it empty for XAMPP default)

try {
    $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    
    // Set PDO to throw exceptions on error
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully to the database";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
