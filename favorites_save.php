<?php
require 'vendor/autoload.php'; // Composer autoload for MongoDB
$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->cup_qissa_db;
$collection = $db->favorites;

// Get POST data
$itemId = (int)$_POST['item_id'];
$itemName = $_POST['item_name'];
$category = $_POST['category'];
$price = (float)$_POST['price'];
$image = $_POST['image'];

// Check if already exists
$exists = $collection->findOne(['itemId' => $itemId]);

if (!$exists) {
    $collection->insertOne([
        'itemId' => $itemId,
        'itemName' => $itemName,
        'category' => $category,
        'price' => $price,
        'image' => $image,
        'dateAdded' => new MongoDB\BSON\UTCDateTime()
    ]);
    echo "Added to favorites";
} else {
    echo "Already in favorites";
}
?>
