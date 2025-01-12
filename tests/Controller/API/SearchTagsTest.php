<?php

namespace Tests\Controller\API;

use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchTagsTest extends ApiTestCase
{
    use RefreshDatabase;

    public function test_unauthorized_request(): void
    {
        $this->getJson('api/v2/search/tags')->assertUnauthorized();
    }

    public function test_without_query(): void
    {
        $this->getJsonAuthorized('api/v2/search/tags')
            ->assertOk()
            ->assertExactJson([]);
    }

    public function test_with_empty_query(): void
    {
        // This tag must not be present in the results
        Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'artificial-intelligence',
        ]);

        $this->getJsonAuthorized('api/v2/search/tags?query=')
            ->assertOk()
            ->assertExactJson([]);
    }

    public function test_with_multiple_results(): void
    {
        $tag = Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'programming',
        ]);

        $tag2 = Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'programming-books',
        ]);

        $tag3 = Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'pair-programming',
        ]);

        // This tag must not be present in the results
        Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'learning',
        ]);

        $url = sprintf('api/v2/search/tags?query=%s', 'programming');
        $this->getJsonAuthorized($url)
            ->assertOk()
            ->assertExactJson([
                $tag->id => $tag->name,
                $tag2->id => $tag2->name,
                $tag3->id => $tag3->name,
            ]);
    }

    public function test_with_short_query(): void
    {
        $tag = Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'programming',
        ]);

        $tag2 = Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'programming-books',
        ]);

        // This tag must not be present in the results
        Tag::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'learning',
        ]);

        $url = sprintf('api/v2/search/tags?query=%s', 'p');
        $this->getJsonAuthorized($url)
            ->assertOk()
            ->assertExactJson([
                $tag->id => $tag->name,
                $tag2->id => $tag2->name,
            ]);
    }
}
