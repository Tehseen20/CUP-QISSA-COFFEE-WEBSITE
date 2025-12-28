<?php
require 'vendor/autoload.php';

try {
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $db = $client->cup_qissa_db;
} catch (Exception $e) {
    die("MongoDB connection failed");
}
?>
