<?php

require_once('Client.php');

$client = new Client();  // create a new client
$sofa = $client->create('sofa', 123, 'green sofa');  //create a new sofa
$chair = $client->create('chair', 1647, 'tall chair'); //create a new 
$table = $client->create('table', 123, 'coffee table');  //create a new table
$bookcase = $client->create('bookcase', 1647, 'wooden bookcase'); //create a new bookcase