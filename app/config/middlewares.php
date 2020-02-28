<?php

$app->addMiddleware('before', function($c){
    session_start();
});
$app->addMiddleware('before', function($c){
    header('Content-Type: application/json');
});
/*$app->addMiddleware('after', function($c){
    echo "|   After fired ...";
});
$app->addMiddleware('after', function($c){
    echo "|   After fired again";
});*/