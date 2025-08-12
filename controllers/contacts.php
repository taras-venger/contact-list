<?php

$config = require('config.php');
$db = (new Database($config["database"]));

$contacts = $db->fetchAll("SELECT * FROM contacts");

$heading = 'Contacts';

require 'views/contacts.view.php';