<?php

namespace Tests\Controller\Setup;

use App\Settings\SettingsAudit;
use App\Settings\SystemSettings;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MetaControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_setup_check_redirect(): void
    {
        SystemSettings::fake([
            'setup_completed' => false,
        ]);

        $response = $this->get('/');

        $response->assertRedirect('setup/start');
    }

    public function test_setup_check_without_redirect(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('login');
    }

    public function test_redirect_if_setup_completed(): void
    {
        $response = $this->get('setup/start');

        $response->assertRedirect('/');
    }

    public function test_setup_welcome_view(): void
    {
        SystemSettings::fake([
            'setup_completed' => false,
        ]);

        $response = $this->get('setup/start');

        $response->assertOk()
            ->assertSee('Welcome to the LinkAce setup');
    }
}
