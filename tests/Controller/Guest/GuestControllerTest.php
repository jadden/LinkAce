<?php

namespace Tests\Controller\Guest;

use App\Settings\SettingsAudit;
use App\Settings\SystemSettings;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GuestControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_mode_enabled(): void
    {
        SystemSettings::fake([
            'guest_access_enabled' => true,
            'setup_completed' => true,
        ]);

        $response = $this->get('/');

        $response->assertRedirect('guest/links');
    }

    public function test_guest_mode_disabled_with_splashpage(): void
    {
        $response = $this->get('/');

        $response->assertRedirect('login');
    }

    public function test_guest_mode_disabled_with_login(): void
    {
        $response = $this->get('links');

        $response->assertRedirect('login');
    }
}
