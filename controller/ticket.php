<?php


$config  = require('config.php');
$db = new Database($config['database']);

$id = $_GET['id'];
$ticket = $db->query('SELECT * FROM tickets WHERE id = :id', ['id' => $id])->fetch();



if (!$ticket) {
    abort();
}

if($ticket['user_id'] != 7 ) {
    abort(Response::FORBIDDEN);
}

$heading = ucwords( $ticket['title']);

require 'views/ticket.view.php';
    