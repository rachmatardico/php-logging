<?php

namespace Matt\PhpLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class ContextTest extends TestCase
{
    public function testContext()
    {
        $logger = new Logger(ContextTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));

        $logger->info("This is log message", ["username" => "Matt"]);
        $logger->info("Try login user", ["username" => "Matt"]);
        $logger->info("Success login user", ["username" => "Matt"]);

        self::assertNotNull($logger);
    }
}