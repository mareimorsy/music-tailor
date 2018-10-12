<?php
header("Content-Type: application/json;charset=utf-8");
echo "{\"fulfillmentText\": \"$HTTP_RAW_POST_DATA\"}";