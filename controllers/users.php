<?php

$config = require('config.php');
$db = (new Database($config["database"]));

$users = $db->fetchAll("SELECT * FROM users");

$heading = 'Users';

require 'views/users.view.php';