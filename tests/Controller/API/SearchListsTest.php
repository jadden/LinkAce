<?php

namespace Tests\Controller\API;

use App\Models\LinkList;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SearchListsTest extends ApiTestCase
{
    use RefreshDatabase;

    public function test_unauthorized_request(): void
    {
        $this->getJson('api/v2/search/lists')->assertUnauthorized();
    }

    public function test_without_query(): void
    {
        $this->getJsonAuthorized('api/v2/search/lists')
            ->assertOk()
            ->assertExactJson([]);
    }

    public function test_with_empty_query(): void
    {
        // This list must not be present in the results
        LinkList::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'Scientific Articles',
        ]);

        $this->getJsonAuthorized('api/v2/search/lists?query=')
            ->assertOk()
            ->assertExactJson([]);
    }

    public function test_with_multiple_results(): void
    {
        $list = LinkList::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'Scientific Articles',
        ]);

        $list2 = LinkList::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'Articles about Web Development',
        ]);

        // This list must not be present in the results
        LinkList::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'Learning Theory Resources',
        ]);

        $url = sprintf('api/v2/search/lists?query=%s', 'articles');
        $this->getJsonAuthorized($url)
            ->assertOk()
            ->assertExactJson([
                $list->id => $list->name,
                $list2->id => $list2->name,
            ]);
    }

    public function test_with_short_query(): void
    {
        $list = LinkList::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'Scientific Articles',
        ]);

        $list2 = LinkList::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'Articles about Web Development',
        ]);

        // This list must not be present in the results
        LinkList::factory()->create([
            'user_id' => $this->user->id,
            'name' => 'Quantum Theories',
        ]);

        $url = sprintf('api/v2/search/lists?query=%s', 'ar');
        $this->getJsonAuthorized($url)
            ->assertOk()
            ->assertExactJson([
                $list->id => $list->name,
                $list2->id => $list2->name,
            ]);
    }
}
