<?php

use Composer\ClassA;
use Composer\ClassB;
use Composer\ClassC;
use GuzzleHttp\Client;

require __DIR__ . '/../vendor/autoload.php';

ClassA::hello();
ClassB::hello();
ClassC::hello();

$client = new Client();
$response = $client->request('GET', 'https://catfact.ninja/fact');

echo $response->getBody();
