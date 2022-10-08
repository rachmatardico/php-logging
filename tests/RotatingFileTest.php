<?php

namespace Matt\PhpLogging;

use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;
use PHPUnit\Framework\TestCase;

class RotatingFileTest extends TestCase
{
    public function testRotating()
    {
        $logger = new Logger(RotatingFileTest::class);
        $logger->pushHandler(new StreamHandler("php://stderr"));
        $logger->pushHandler(new RotatingFileHandler(__DIR__ . '/../app.log', 10, Logger::INFO));

        $logger->info("Belajar PHP");
        $logger->info("Belajar PHP OOP");
        $logger->info("Belajar PHP Database");
        $logger->info("Belajar PHP Web");

        self::assertNotNull($logger);
    }
}