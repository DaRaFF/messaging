<?php

namespace Filter;

use Message\LogInMessage;
use Message\ClientDetails;


class CheckApiKeyIsEnabledForClient
{

    public function __construct(LogInMessage $input)
    {
        $this->process($input, new ClientDetails);
    }

    private function process(LogInMessage $input, ClientDetails $clientDetails)
    {
        $details = $clientDetails->getDetailsFrom($input->apiKey);

        if($details === null) {
            echo "Client not found";
        }

        $input->clientDetails = $details;
    }
}