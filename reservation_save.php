<?php
require 'db_mongo.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "phone" => $_POST['phone'],
        "guests" => $_POST['guests'],
        "date" => $_POST['date'],
        "time" => $_POST['time'],
        "table_type" => $_POST['table_type'],
        "notes" => $_POST['notes'],
        "created_at" => new MongoDB\BSON\UTCDateTime()
    ];

    $db->reservations->insertOne($data);
    echo "Reservation saved";
}
?>
