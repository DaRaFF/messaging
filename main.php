<?php

use Message\LogInMessage;
use Pipe\PipeLine;
use Filter\CheckApiKeyIsEnabledForClient;
use Filter\CheckUserSuppliedCredentials;
use Filter\LogMessage;

$loader = require 'vendor/autoload.php';

$msg = new LogInMessage();
$msg->pin = "1234";
$msg->username = "Jack A. Nory";
$msg->password = "@x1z/+==32a";
$msg->apiKey = "a9aafe3f-76d3-4304-a39e-cf05edb870f2";

$loginPipeline = new PipeLine();
$loginPipeline->register(new CheckUserSuppliedCredentials($msg))
    ->register(new CheckApiKeyIsEnabledForClient($msg))
    ->register(new LogMessage($msg));
$loginPipeline->execute($msg);

var_dump($msg);