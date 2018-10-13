<?php
header("Content-Type: application/json;charset=utf-8");
$req=json_decode(file_get_contents('php://input'), false);
$songName = $req->queryResult->parameters->songName;
// echo "{\"fulfillmentText\": \"$speech\"}";
$string = "<speak><audio src='https://actions.google.com/sounds/v1/cartoon/slide_whistle.ogg'>didnt get your MP3 audio file</audio></speak>";
// echo "{\"fulfillmentText\": \"$string\"}";

$songURL="https://music-tailor.herokuapp.com/songs/believer.mp3";

echo '{
    "payload": {
      "google": {
        "expectUserResponse": true,
        "richResponse": {
          "items": [
            {
              "simpleResponse": {
                "ssml": "<speak>'.$songName.' is now playing...<audio src=\"'.$songURL.'\">Unable to play the song</audio></speak>",
                "displayText": "This is a SSML sample. Make sure your sound is enabled to hear the demo"
              }
            }
          ]
        }
      }
    }
  }';