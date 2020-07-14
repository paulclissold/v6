<?php

    require_once('api.class.php');

    //
    // :TODO: Set the API endpoint URL and your API key
    //
    // Please refer to the documentation for instructions on how to generate an API key.
    //
    // Replace <your_login_hostname> with the hostname you use to access the system.
    // This is the same hostname which appears in your browsers address bar after you log into the system.
    //
    $url     = 'https://comms.bupaoptical.com.au/api/jsonrpcserver';
    $api_key = '887d36196850ea1d1ed35ca1d3ad6af2887f0e476861f11732642d1fd3ac3ccf';


    // Create API wrapper object
    $api = new Api($url, $api_key, '3.3');

    // Enable request debugging
    $api->setDebug(true);

    // If required, set the proxy connection details
    // $api->setProxy('');

    // Get a list of folders
    $listFolders = $api->invokeMethod('searchFolders', 'list');

    echo PHP_EOL . 'Response:' . PHP_EOL;
    print_r($listFolders);