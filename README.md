# Laravel Redoc

Easily publish your API documentation using your OpenAPI document in your Laravel Application.

## Installation

You can install this package via composer:

```bash
composer require juststeveking/laravel-redoc
```


## Configuration

You can publish the configuration file with:

```bash
php artisan vendor:publish --provider="JustSteveKing\Laravel\LaravelRedoc\RedocServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    'path' => [
        'name' => env('REDOC_PATH_NAME', 'docs'),
        'url' => env('REDOC_PATH_URL', 'api/docs'),
    ],

    'openapi' => [
        'path' => env('REDOC_OPENAPI_PATH', 'http://petstore.swagger.io/v2/swagger.json')
    ],

    'config' => [
        'search' => false,

        'hostname' => false,

        'loading' => false,

        'menu' => true,

        'scrollbars' => true,

        'trust' => true,
    ]
];
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.


## Security

If you discover any security related issues, please email juststevemcd@gmail.com instead of using the issue tracker.


## Credits

- [Steve McDougall][link-author]
- [All Contributors][link-contributors]
- [Redocly Team for their open source tool redoc](https://github.com/Redocly/redoc)


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

