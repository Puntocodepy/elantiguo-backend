<?php

use App\Constants\HttpRequest;

function respJson($message, $code = HttpRequest::CODE_SUCCESSFUL){
    return response()->json([ 'message' => $message ], $code);
}

function respData($message, $data, $code = HttpRequest::CODE_SUCCESSFUL){
    return response()->json([
        'message' => $message,
        'data' => $data
    ], $code);
}

function getMessage($message){
    return [ 'message' => $message ];
}


function respUnprocessableEntity($message){
    return response()->json(['message' => $message], HttpRequest::UNPROCESSABLE_ENTITY);
}
