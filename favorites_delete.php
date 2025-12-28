<?php
require 'vendor/autoload.php';
$client = new MongoDB\Client("mongodb://localhost:27017");
$db = $client->cup_qissa_db;
$collection = $db->favorites;

// Remove favorite
$itemId = (int)$_POST['item_id'];
$collection->deleteOne(['itemId' => $itemId]);

echo "Removed from favorites";
?>
