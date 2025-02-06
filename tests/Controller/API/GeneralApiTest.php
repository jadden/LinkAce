<?php

namespace Tests\Controller\API;

use Illuminate\Foundation\Testing\RefreshDatabase;

class GeneralApiTest extends ApiTestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        $_ENV['API_RATE_LIMIT'] = '120,1';
        parent::setUp();
    }

    public function test_version(): void
    {
        $this->getJsonAuthorized('api/version')->assertJson(['version' => 'v2']);
    }

    public function test_custom_rate_limit(): void
    {
        $response = $this->getJsonAuthorized('api/v2/links');

        $response->assertHeader('x-ratelimit-limit', 120);
        $response->assertHeader('x-ratelimit-remaining', 119);
    }
}
