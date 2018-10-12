<?php
header("Content-Type: application/json;charset=utf-8");
$debug = var_export($_REQUEST, true);
echo '
{
    "conversationToken": "[]",
    "expectUserResponse": true,
    "expectedInputs": [
      {
        "inputPrompt": {
          "richInitialPrompt": {
            "items": [
              {
                "simpleResponse": {
                  "textToSpeech": "'.$debug.'"
                }
              }
            ]
          }
        },
        "possibleIntents": [
          {
            "intent": "assistant.intent.action.TEXT"
          }
        ],
        "speechBiasingHints": [
          "$songName"
        ]
      }
    ],
    "responseMetadata": {
      "status": {
        "code": 14,
        "message": "Webhook error (206)"
      },
      "queryMatchInfo": {
        "queryMatched": true,
        "intent": "4ed3647e-dfc9-4dd1-949e-45b582e7e890",
        "parameterNames": [
          "songName"
        ]
      }
    }
  }
';