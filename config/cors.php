<?php

return [

    'paths' => ['api/*', 'sanctum/csrf-cookie', '*'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        env('FRONTEND_URL', 'http://localhost:3000'),
        'http://localhost',
        'http://127.0.0.1',
        'http://localhost:3000',
        'http://localhost:3000/en',
        'http://127.0.0.1:8000',
        'https://mostplay.egamings.org',
    ],

    'allowed_origins_patterns' => ['/^https?:\/\/.*$/'],

    'allowed_headers' => ['*'],

    'exposed_headers' => [
        'Access-Control-Allow-Origin',
        'Access-Control-Allow-Methods',
        'Access-Control-Allow-Headers',
        'Access-Control-Allow-Credentials',
    ],

    'max_age' => 86400,

    'supports_credentials' => true,

];
