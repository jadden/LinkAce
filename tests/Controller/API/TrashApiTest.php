<?php

namespace Tests\Controller\API;

use App\Models\Link;
use App\Models\LinkList;
use App\Models\Note;
use App\Models\Tag;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Controller\Traits\PreparesTrash;

class TrashApiTest extends ApiTestCase
{
    use RefreshDatabase;
    use PreparesTrash;

    protected function setUp(): void
    {
        parent::setUp();
        $this->setupTrashTestData();
    }

    public function test_unauthorized_request(): void
    {
        $this->getJson('api/v2/trash/links')->assertUnauthorized();
    }

    public function test_get_links(): void
    {
        $response = $this->getJsonAuthorized('api/v2/trash/links');
        $response->assertOk();

        $result = json_decode($response->content());
        $this->assertEquals('Very special site title', $result[0]->title);
    }

    public function test_get_lists(): void
    {
        $response = $this->getJsonAuthorized('api/v2/trash/lists');
        $response->assertOk();

        $result = json_decode($response->content());
        $this->assertEquals('A Tests List', $result[0]->name);
    }

    public function test_get_tags(): void
    {
        $response = $this->getJsonAuthorized('api/v2/trash/tags');
        $response->assertOk();

        $result = json_decode($response->content());
        $this->assertEquals('Examples', $result[0]->name);
    }

    public function test_get_notes(): void
    {
        $response = $this->getJsonAuthorized('api/v2/trash/notes');
        $response->assertOk();

        $result = json_decode($response->content());
        $this->assertEquals('Quisque placerat facilisis egestas cillum dolore.', $result[0]->note);
    }

    /*
     * Tests for clearing the trash
     */

    public function test_valid_trash_clear_links_response(): void
    {
        $this->setupTrashTestData();

        $this->deleteJsonAuthorized('api/v2/trash/clear', [
            'model' => 'links',
        ])->assertOk();

        $this->assertEquals(0, DB::table('links')->count());
    }

    public function test_valid_trash_clear_tags_response(): void
    {
        $this->setupTrashTestData();

        $this->deleteJsonAuthorized('api/v2/trash/clear', [
            'model' => 'tags',
        ])->assertOk();

        $this->assertEquals(0, DB::table('tags')->count());
    }

    public function test_valid_trash_clear_lists_response(): void
    {
        $this->setupTrashTestData();

        $this->deleteJsonAuthorized('api/v2/trash/clear', [
            'model' => 'lists',
        ])->assertOk();

        $this->assertEquals(0, DB::table('lists')->count());
    }

    public function test_valid_trash_clear_notes_response(): void
    {
        $this->setupTrashTestData();

        $this->deleteJsonAuthorized('api/v2/trash/clear', [
            'model' => 'notes',
        ])->assertOk();

        $this->assertEquals(0, DB::table('notes')->count());
    }

    public function test_invalid_trash_clear_request(): void
    {
        $this->setupTrashTestData();

        $this->deleteJsonAuthorized('api/v2/trash/clear', [
            //'model' => 'links',
        ])->assertJsonValidationErrors([
            'model' => 'The model field is required.',
        ]);
    }

    public function test_clear_request_with_invalid_model(): void
    {
        $this->setupTrashTestData();

        $this->deleteJsonAuthorized('api/v2/trash/clear', [
            'model' => 'shoes',
        ])->assertJsonValidationErrors([
            'model' => 'The selected model is invalid.',
        ]);
    }

    /*
     * Tests for restoring items
     */

    public function test_valid_restore_link_response(): void
    {
        $this->setupTrashTestData();

        $this->patchJsonAuthorized('api/v2/trash/restore', [
            'model' => 'link',
            'id' => '1',
        ])->assertOk();

        $this->assertEquals(null, Link::find(1)->deleted_at);
    }

    public function test_valid_restore_tag_response(): void
    {
        $this->setupTrashTestData();

        $this->patchJsonAuthorized('api/v2/trash/restore', [
            'model' => 'tag',
            'id' => '1',
        ])->assertOk();

        $this->assertEquals(null, Tag::find(1)->deleted_at);
    }

    public function test_valid_restore_list_response(): void
    {
        $this->setupTrashTestData();

        $this->patchJsonAuthorized('api/v2/trash/restore', [
            'model' => 'list',
            'id' => '1',
        ])->assertOk();

        $this->assertEquals(null, LinkList::find(1)->deleted_at);
    }

    public function test_valid_restore_note_response(): void
    {
        $this->setupTrashTestData();

        $this->patchJsonAuthorized('api/v2/trash/restore', [
            'model' => 'note',
            'id' => '1',
        ])->assertOk();

        $this->assertEquals(null, Note::find(1)->deleted_at);
    }

    public function test_invalid_restore_response(): void
    {
        $this->setupTrashTestData();

        $this->patchJsonAuthorized('api/v2/trash/restore', [
            //'model' => 'link',
            //'id' => '1',
        ])->assertJsonValidationErrors([
            'model' => 'The model field is required.',
            'id' => 'The id field is required.',
        ]);
    }

    public function test_restore_with_missing_model(): void
    {
        $this->setupTrashTestData();

        $this->patchJsonAuthorized('api/v2/trash/restore', [
            'model' => 'link',
            'id' => '1345235',
        ])->assertNotFound();
    }
}
