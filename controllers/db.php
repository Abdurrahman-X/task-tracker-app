<?php
    
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "task-tracker");

    // CREATE CONNECTION
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // CHECK CONNECTION
    if ($conn -> connect_error) {
        die ("Connection failed: " . $conn -> connect_error);
    }
?>