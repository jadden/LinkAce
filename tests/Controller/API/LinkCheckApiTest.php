<?php

namespace Tests\Controller\API;

use App\Models\Link;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LinkCheckApiTest extends ApiTestCase
{
    use RefreshDatabase;

    public function test_unauthorized_request(): void
    {
        $this->getJson('api/v2/links/check')
            ->assertUnauthorized();
    }

    public function test_successful_link_check(): void
    {
        Link::factory()->create([
            'url' => 'https://example.com',
        ]);

        $this->getJsonAuthorized('api/v2/links/check?url=https://example.com')
            ->assertOk()
            ->assertJson([
                'linksFound' => true,
            ]);
    }

    public function test_negative_link_check(): void
    {
        Link::factory()->create([
            'url' => 'https://test.com',
        ]);

        $this->getJsonAuthorized('api/v2/links/check?url=https://example.com')
            ->assertOk()
            ->assertJson([
                'linksFound' => false,
            ]);
    }

    public function test_check_without_query(): void
    {
        $this->getJsonAuthorized('api/v2/links/check')
            ->assertOk()
            ->assertJson([
                'linksFound' => false,
            ]);
    }
}
