<?php
include('vendor/autoload.php');

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

$version = new Version2X('http://localhost:3001');

$client = new Client($version);
$client->initialize();
$client->emit('new_notify', ['test'=>'test','test1'=>'test1']);
$client->close();