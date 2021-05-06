<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\LaravelRedoc\Tests;

use JustSteveKing\Laravel\LaravelRedoc\RedocServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            RedocServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('redoc.path.url', 'api/docs');
    }
}
