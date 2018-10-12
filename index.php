<?php
header("Content-Type: application/json;charset=utf-8");
// var_dump($GLOBA); 

$data = file_get_contents('php://input');

echo "{\"fulfillmentText\": \"playing...\"}";

$my_file = 'file.txt';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, $data);