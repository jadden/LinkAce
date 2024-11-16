<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SystemSettings extends Settings
{
    public ?string $page_title;
    public ?string $logo_text;

    public ?string $cron_token;

    public ?string $custom_header_content;

    public ?string $additional_footer_link_url;
    public ?string $additional_footer_link_text;

    public bool $contact_page_enabled;
    public ?string $contact_page_title;
    public ?string $contact_page_content;

    public bool $guest_access_enabled;
    public bool $setup_completed;

    public static function group(): string
    {
        return 'system';
    }
}
