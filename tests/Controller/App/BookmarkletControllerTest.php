<?php

namespace Tests\Controller\App;

use App\Models\Link;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BookmarkletControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_valid_bookmarklet_response(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('bookmarklet/add?u=https://example.com&t=Example%20Title');

        $response->assertOk()
            ->assertSee('https://example.com')
            ->assertSee('Example Title');
    }

    public function test_bookmarklet_with_existing_link(): void
    {
        Link::factory()->create([
            'url' => 'https://example.com/test',
        ]);

        $this->actingAs(User::notSystem()->first());

        $response = $this->get('bookmarklet/add?u=https://example.com/test&t=Example%20Title');

        $response->assertOk()->assertSee('A Link with that URL already exists.');
    }

    public function test_login_redirect_for_bookmarklet(): void
    {
        $response = $this->get('bookmarklet/add?u=https://example.com&t=Example%20Title');

        $response->assertRedirect('bookmarklet/login')
            ->assertSessionHas('bookmarklet.new_url', 'https://example.com')
            ->assertSessionHas('bookmarklet.new_title', 'Example Title');
    }

    public function test_valid_bookmarklet_with_tags_and_lists(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $response = $this->get('bookmarklet/add?u=https://example.com&t=Example%20Title&tags=some%20%26%20tag&lists=a%20new%20list');

        $response->assertOk()
            ->assertSee('https://example.com')
            ->assertSee('Example Title')
            ->assertSee('some & tag')
            ->assertSee('a new list')
        ;
    }
}
