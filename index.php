<?php
header("Content-Type: application/json;charset=utf-8");
$data=var_export($_REQUEST, true);
echo "{\"fulfillmentText\": \"$data\"}";