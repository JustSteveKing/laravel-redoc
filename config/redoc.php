<?php

return [
    'path' => [
        'name' => env('REDOC_PATH_NAME', 'docs'),
        'url' => env('REDOC_PATH_URL', 'api/docs'),
    ],

    'openapi' => [
        'path' => env('REDOC_OPENAPI_PATH', 'http://petstore.swagger.io/v2/swagger.json')
    ]
];
