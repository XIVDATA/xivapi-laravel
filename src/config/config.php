<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API KEY
    |--------------------------------------------------------------------------
    |
    | Set the API Key for XIVAPI here, or as Enviroment Variable with XIVAPI_KEY
    |
    */

    'key' => env('XIVAPI_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | API Timeout
    |--------------------------------------------------------------------------
    |
    | The Timeout for the API, you can set it here or over the Envirment
    | Variable XIVAPI_TIMEOUT
    |
    */

    'timeout' => env('XIVAPI_TIMEOUT', '10'),

    /*
    |--------------------------------------------------------------------------
    | TLS Verfication
    |--------------------------------------------------------------------------
    |
    | Check if the certificate of the API is valid.
    |
    */

    'verify' => env('XIVAPI_VERIFY', false)
];