<?php
// header("Content-Type: application/json;charset=utf-8");
$req=json_decode(file_get_contents('php://input'), false);
$songName  = $req->queryResult->parameters->songName;
$queryText = $req->queryResult->queryText;
// echo "{\"fulfillmentText\": \"$speech\"}";
$string = "<speak><audio src='https://actions.google.com/sounds/v1/cartoon/slide_whistle.ogg'>didnt get your MP3 audio file</audio></speak>";

$songURL="https://music-tailor.herokuapp.com/songs/believer.mp3";


// echo getSongName("play shape of you song");
// echo getSongName("play shape of you");
// echo getSongName("play circus music");
// echo getSongName("I'd like to listen to shape of you song");
// echo getSongName("I would like to listen to shape of you song");
// echo getSongName("I would like to listen to shape of you");
// echo getSongName("I'd like to listen to shape of you");
// echo getSongName("I'd like to listen to shape of you");


function getSongName($queryText){
    $removeList = ["play", "i'd", "i would", "like to", "listen to", "song", "music"];
    $songName = strtolower($queryText);
    foreach($removeList as $word){
        $songName = str_replace($word, '', $songName);
    }
    return $songName;
}


switch ($songName) {
    case "shape of you":
        $songURL = "";
        break;
    case "blue":
        $songURL = "";
        break;
    case "green":
        $songURL = "";
        break;
    default:
        $songURL = "";
}



// echo '{
//     "payload": {
//       "google": {
//         "expectUserResponse": true,
//         "richResponse": {
//           "items": [
//             {
//               "simpleResponse": {
//                 "ssml": "<speak>'.$songName.' is now playing <audio src=\"'.$songURL.'\">your wave file</audio></speak>"
//               }
//             }
//           ]
//         }
//       }
//     }
//   }';