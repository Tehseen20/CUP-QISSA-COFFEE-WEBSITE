<?php
require 'db_mongo.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "subject" => $_POST['subject'],
        "message" => $_POST['message'],
        "created_at" => new MongoDB\BSON\UTCDateTime()
    ];

    $db->contact->insertOne($data);
    echo "Contact saved";
}
?>
