<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'api_Key' => 'AIzaSyBX5jdig_XKwIqvf3bmDkH2n6us1da9cO4',
        'auth_Domain' => 'laravelfirebase-2-3488e.firebaseapp.com',
        'database_URL' => 'https://laravelfirebase-2-3488e-default-rtdb.firebaseio.com/',
        'project_Id' => 'laravelfirebase-2-3488e',
        'storage_Bucket' => 'laravelfirebase-2-3488e.appspot.com',
        'messagingSender_Id' => '279237656002',
        'app_Id' => '1:279237656002:web:87866cbd88927604262a5b',
        'measurement_Id' => 'G-L0402NZV8C',
    ],
   
];
