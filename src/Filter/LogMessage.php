<?php

namespace Filter;

use Message\LogInMessage;
use Monolog\Logger;


class LogMessage
{
    public function __construct(LogInMessage $input)
    {
       $this->process($input);
    }

    private function process(LogInMessage $input)
    {
        $logger = new Logger("message");
        $logger->info(serialize($input));
    }
}