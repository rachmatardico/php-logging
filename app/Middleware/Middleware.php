<?php

namespace Matt\PhpLogging\Middleware;

interface Middleware
{
    function before():void;
}