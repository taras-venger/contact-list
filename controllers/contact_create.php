<?php

$heading = 'Add Contact';

$config = require('config.php');
$db = (new Database($config["database"]));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db->query("INSERT INTO contacts (name, last_name, phone, email, category) VALUES (:name, :last_name, :phone, :email, :category)", [
        'name' => $_POST['name'] ?? '',
        'last_name' => $_POST['last_name'] ?? '',
        'phone' => $_POST['phone'] ?? '',
        'email' => $_POST['email'] ?? '',
        'category' => $_POST['category'] ?? '',
    ]);
    header('Location: /contacts');
    exit;
}

require 'views/contact_create.view.php';