<?php

namespace App\Events;

class UsersCreated
{
    public function __invoke($e)
    {
        $event = $e->getName();
        $params = $e->getParams();
        echo sprintf('Event fired ... "%s" - "%s"', $event, json_encode($params));
    }
}