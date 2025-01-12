<?php

namespace Tests\Controller\Guest;

use App\Models\Link;
use App\Models\LinkList;
use App\Models\Tag;
use App\Settings\SettingsAudit;
use App\Settings\SystemSettings;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class FeedControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        SystemSettings::fake([
            'guest_access_enabled' => true,
            'setup_completed' => true,
        ]);
    }

    public function test_link_feed(): void
    {
        $linkPublic = Link::factory()->create(['visibility' => 1]);
        $linkPrivate = Link::factory()->create(['visibility' => 3]);

        $response = $this->get('guest/links/feed');

        $response->assertOk()
            ->assertSee($linkPublic->url)
            ->assertDontSee($linkPrivate->url);
    }

    public function test_list_feed(): void
    {
        LinkList::factory()->create(['name' => 'public list', 'visibility' => 1]);
        LinkList::factory()->create(['name' => 'private list', 'visibility' => 3]);

        $response = $this->get('guest/lists/feed');

        $response->assertOk()
            ->assertSee('public list')
            ->assertDontSee('private list');
    }

    public function test_list_link_feed(): void
    {
        $link = LinkList::factory()->create(['name' => 'test link', 'visibility' => 1]);
        $listLink = Link::factory()->create(['visibility' => 1]);
        $privateListLink = Link::factory()->create(['visibility' => 3]);
        $unrelatedLink = Link::factory()->create();

        $listLink->lists()->sync([$link->id]);

        $response = $this->get('guest/lists/1/feed');

        $response->assertOk()
            ->assertSee('test link')
            ->assertSee($listLink->url)
            ->assertDontSee($privateListLink->url)
            ->assertDontSee($unrelatedLink->url);
    }

    public function test_private_list_link_feed(): void
    {
        LinkList::factory()->create(['visibility' => 3]);

        $response = $this->get('guest/lists/1/feed');

        $response->assertNotFound();
    }

    public function test_tags_feed(): void
    {
        Tag::factory()->create(['name' => 'public tag', 'visibility' => 1]);
        Tag::factory()->create(['name' => 'private tag', 'visibility' => 3]);

        $response = $this->get('guest/tags/feed');

        $response->assertOk()
            ->assertSee('public tag')
            ->assertDontSee('private tag');
    }

    public function test_tag_link_feed(): void
    {
        $tag = Tag::factory()->create(['name' => 'test tag', 'visibility' => 1]);
        $tagLink = Link::factory()->create(['visibility' => 1]);
        $privateTagLink = Link::factory()->create(['visibility' => 3]);
        $unrelatedLink = Link::factory()->create();

        $tagLink->tags()->sync([$tag->id]);

        $response = $this->get('guest/tags/1/feed');

        $response->assertOk()
            ->assertSee('test tag')
            ->assertSee($tagLink->url)
            ->assertDontSee($privateTagLink->url)
            ->assertDontSee($unrelatedLink->url);
    }

    public function test_private_tag_link_feed(): void
    {
        Tag::factory()->create(['visibility' => 3]);

        $response = $this->get('guest/tags/1/feed');

        $response->assertNotFound();
    }
}
