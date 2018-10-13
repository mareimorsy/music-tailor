<?php
header("Content-Type: application/json;charset=utf-8");
$req=json_decode(file_get_contents('php://input'), false);
$songName = $req->queryResult->parameters->songName;
$speech = '<speak><audio src="https://actions.google.com/sounds/v1/cartoon/slide_whistle.ogg">did not get your audio file</audio></speak>';
// echo "{\"fulfillmentText\": \"$speech\"}";
$string = '<speak>
Here are <say-as interpret-as="characters">SSML</say-as> samples.
I can pause <break time="3s"/>.
I can play a sound
<audio src="https://actions.google.com/sounds/v1/cartoon/slide_whistle.ogg">didn\'t get your MP3 audio file</audio>.
I can speak in cardinals. Your number is <say-as interpret-as="cardinal">10</say-as>.
Or I can speak in ordinals. You are <say-as interpret-as="ordinal">10</say-as> in line.
Or I can even speak in digits. The digits for ten are <say-as interpret-as="characters">10</say-as>.
I can also substitute phrases, like the <sub alias="World Wide Web Consortium">W3C</sub>.
Finally, I can speak a paragraph with two sentences.
<p><s>This is sentence one.</s><s>This is sentence two.</s></p>
</speak>';
echo '{"ssml": '.$string.', "displayText": "Hello"}';