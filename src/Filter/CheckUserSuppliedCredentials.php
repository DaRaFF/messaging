<?php

namespace Filter;

use Message\LogInMessage;


class CheckUserSuppliedCredentials
{
    public function __construct(LogInMessage $input)
    {
       $this->process($input);
    }

    private function process(LogInMessage $input)
    {
        if(empty($input->username)) {
            echo "Invalid credentials";
        }

        if(empty($input->password)) {
            echo "Invalid credentials";
        }
    }
}