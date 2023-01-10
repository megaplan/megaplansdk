<?php

namespace Megaplan\Megaplansdk\Logger;

class FakeLogger extends AbstractLogger
{
    protected function writeLog($message, $context)
    {
    }

    public static function infoLogger(): FakeLogger
    {
        return new FakeLogger( AbstractLogger::LEVEL_INFO);
    }
}
