<?php
    define('USER', 'Jalpriya');
    define('PASSWORD', 'jalpriya');
    define('HOST', 'localhost');
    define('DATABASE', 'chaperone');
    try {
        $conn = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>