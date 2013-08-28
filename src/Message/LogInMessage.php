<?php
namespace Message;

use Message\ClientDetails;
use Message\UserDetails;

class LogInMessage
{
    public $pin;
    public $username;
    public $password;
    public $isAllowed;
    public $apiKey;
    /** @var ClientDetails */
    public $clientDetails;
    /** @var UserDetails */
    public $userDetails;
}