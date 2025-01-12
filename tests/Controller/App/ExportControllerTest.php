<?php

namespace Tests\Controller\App;

use App\Models\Link;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExportControllerTest extends TestCase
{
    use RefreshDatabase;

    private $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->seed('ExampleSeeder');

        $this->user = User::notSystem()->first();
        $this->actingAs($this->user);
    }

    public function test_valid_export_response(): void
    {
        $response = $this->get('export');

        $response->assertOk()
            ->assertSee('Export');
    }

    public function test_valid_html_export_generation(): void
    {
        $response = $this->post('export/html');
        $response->assertOk();

        $content = $response->streamedContent();

        $this->assertStringContainsString(
            '<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">',
            $content
        );
    }

    public function test_valid_csv_export_generation(): void
    {
        /** @var Link $link */
        $link = Link::inRandomOrder()->first();

        $response = $this->post('export/csv');
        $response->assertOk();

        $content = $response->streamedContent();

        $this->assertStringContainsString(
            sprintf('%s,%s,%s', $link->id, $link->user_id, $link->url),
            $content
        );
    }
}
