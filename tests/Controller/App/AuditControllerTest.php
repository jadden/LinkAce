<?php

namespace Tests\Controller\App;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuditControllerTest extends TestCase
{
    use RefreshDatabase;

    private User $user;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    public function test_audit_page(): void
    {
        $this->user->assignRole(Role::ADMIN);

        $response = $this->get('system/audit');

        $response->assertOk()->assertSee('System Events');
    }

    public function test_audit_page_with_entries(): void
    {
        $this->user->assignRole(Role::ADMIN);

        $this->post('settings/generate-cron-token');

        $response = $this->get('system/audit');
        $response->assertSee('System: Cron Token was re-generated');
    }
}
