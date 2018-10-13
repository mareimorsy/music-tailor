<?php
header("Content-Type: application/json;charset=utf-8");
$req=json_decode(file_get_contents('php://input'), false);
$songName = $req->queryResult->parameters->songName;
// echo "{\"fulfillmentText\": \"$songName is now playing\"}";
$speech = '<speak><audio src="https://actions.google.com/sounds/v1/cartoon/slide_whistle.ogg">did not get your audio file</audio></speak>';
echo "{
    \"speech\": $speech,
    \"displayText\": $speech,
    \"source\": \"webhook-echo-sample\"
}";