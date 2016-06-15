<?php

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

$local = filter_input(INPUT_GET, 'local');

try{
    
    $client = new Client([
        // Base URI is used with relative requests
        'base_uri' => 'http://maps.googleapis.com/maps/api/',
        // You can set any number of default request options.
        'timeout'  => 2.0,
    ]);

    $response = $client->get('geocode/json?sensor=false&address=' . $local);

    $array = json_decode((string) $response->getBody(), true);

    foreach ($array['results'] as $key => $value) {
        echo $value['formatted_address'] .'<br>';
    }

} catch(\GuzzleHttp\Exception\ClientException $e){
    echo 'erro com a requisição: ' . $e->getMessage();
}


