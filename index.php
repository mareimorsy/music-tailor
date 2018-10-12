<?php
header("Content-Type: application/json;charset=utf-8");
$debug = file_get_contents('php://input');
echo "{\"fulfillmentText\": \"$debug\"}";