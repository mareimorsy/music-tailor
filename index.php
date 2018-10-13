<?php
header("Content-Type: application/json;charset=utf-8");
$req=json_decode(file_get_contents('php://input'), false);

$my_file = 'req.json';
$handle = fopen($my_file, 'w') or die('Cannot open file:  '.$my_file);
fwrite($handle, file_get_contents('php://input'));
fclose($handle);

$songName  = $req->queryResult->parameters->songName;
$queryText = $req->queryResult->queryText;
// echo "{\"fulfillmentText\": \"$speech\"}";
$string = "<speak><audio src='https://actions.google.com/sounds/v1/cartoon/slide_whistle.ogg'>didnt get your MP3 audio file</audio></speak>";
$baseURL="https://music-tailor.herokuapp.com/songs/";

// getSongName("play shape of you song");
// getSongName("play shape of you");
// getSongName("play circus music");
// getSongName("I'd like to listen to shape of you song");
// getSongName("I would like to listen to shape of you song");
// getSongName("I would like to listen to shape of you");
// getSongName("I'd like to listen to shape of you");



function getSongName($queryText){
    $removeList = ["play", "i'd", "i would", "like to", "listen to", "song", "music"];
    $songName = strtolower($queryText);
    foreach($removeList as $word){
        $songName = str_replace($word, '', $songName);
    }
    return trim($songName);
}

if (empty($songName)){
    $songName = getSongName($queryText);
}

switch ($songName) {
    case "shape of you":
        $songURL = "shape_of_you.mp3";
        break;
    case "believer":
        $songURL = "believer.mp3";
        break;
    case "try everything":
        $songURL = "try_everything.mp3";
        break;
    default:
        $songURL = "";
}

$songURL = $baseURL.$songURL;

echo '{
    "payload": {
      "google": {
        "expectUserResponse": true,
        "richResponse": {
          "items": [
            {
              "simpleResponse": {
                "ssml": "<speak>'.$songName.' is now playing <audio src=\"'.$songURL.'\">your wave file</audio></speak>",
                "queryText": "$queryText"
              }
            }
          ]
        }
      }
    }
  }';