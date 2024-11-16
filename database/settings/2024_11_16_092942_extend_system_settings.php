<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

Class ExtendSystemSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('system.logo_text', null);

        $this->migrator->add('system.additional_footer_link_url', null);
        $this->migrator->add('system.additional_footer_link_text', null);

        $this->migrator->add('system.contact_page_enabled', false);
        $this->migrator->add('system.contact_page_title', null);
        $this->migrator->add('system.contact_page_content', null);

        $this->migrator->add('guest.locale', config('app.fallback_locale'));
    }
}
