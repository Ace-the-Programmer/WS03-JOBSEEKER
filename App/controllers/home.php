<?php

use Framework\Database;

$config = require basePath('config/db.php');

$db = new Database($config);

$listings = $db->Query('SELECT * FROM listings LIMIT 6')->fetchAll();
// inspect($listings);
loadView('home', ['listings' => $listings]);
