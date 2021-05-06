<?php

declare(strict_types=1);

namespace JustSteveKing\Laravel\LaravelRedoc\Tests;

use JustSteveKing\Laravel\LaravelRedoc\Tests\TestCase;

class DocumentationTest extends TestCase
{
    /**
     * @test
     */
    public function it_responds_as_expected()
    {
        $response = $this->get(config('redoc.path.url'));

        $response->assertStatus(200);
    }
}
