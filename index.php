<?php
header("Content-Type: application/json;charset=utf-8");
$req=json_decode(file_get_contents('php://input'), false);
$songName = $req->queryResult->parameters->songName;
// echo "{\"fulfillmentText\": \"$speech\"}";
$string = "<speak><audio src='https://actions.google.com/sounds/v1/cartoon/slide_whistle.ogg'>didnt get your MP3 audio file</audio></speak>";
// echo "{\"fulfillmentText\": \"$string\"}";


echo '{
    "payload": {
      "google": {
        "expectUserResponse": true,
        "richResponse": {
          "items": [
            {
              "simpleResponse": {
                "ssml": "<speak><audio src=\"https://music-tailor.herokuapp.com/music/believer.ogg\">your wave file</audio></speak>",
                "displayText": "Your song is now playing..."
              }
            }
          ]
        }
      }
    }
  }';