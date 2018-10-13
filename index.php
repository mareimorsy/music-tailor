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
                "ssml": "<speak>I can play a sound <audio src=\"https://music-tailor.herokuapp.com/songs/believer.wav\">your wave file</audio>. I can speak in cardinals. Your position is <say-as interpret-as=\"cardinal\">10</say-as> in line. Or I can speak in ordinals. You are <say-as interpret-as=\"ordinal\">10</say-as> in line. Or I can even speak in digits. Your position in line is <say-as interpret-as=\"digits\">10</say-as>. I can also substitute phrases, like the <sub alias=\"World Wide Web Consortium\">W3C</sub>. Finally, I can speak a paragraph with two sentences. <p><s>This is sentence one.</s><s>This is sentence two.</s></p></speak>",
                "displayText": "This is a SSML sample. Make sure your sound is enabled to hear the demo"
              }
            }
          ]
        }
      }
    }
  }';