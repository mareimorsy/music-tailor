<?php
header("Content-Type: application/json;charset=utf-8");
$debug = var_export($_REQUEST, true);
echo "{\"fulfillmentText\": \"This is a text response\"}";