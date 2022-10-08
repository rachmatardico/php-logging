<?php

namespace Matt\PhpLogging;

use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testLogger()
    {
        $logger = new Logger("ProgrammerZamanNow");

        self::assertNotNull($logger);
    }

    public function loggerWithName()
    {
        $logger = new Logger(LoggerTest::class);
        
        self::assertNotNull($logger);
    }
}