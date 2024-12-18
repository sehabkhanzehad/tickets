<?php

$config  = require('config.php');
$db = new Database($config['database']);


$tickets = $db->query('SELECT * FROM tickets WHERE user_id = 7')->fetchAll();


$heading = "My Tickets";
require 'views/tickets.view.php';

