<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration {
    public function up(): void
    {
        $this->migrator->add('guest.share_bluesky', false);

        foreach (DB::table('users')->pluck('id') as $userId) {
            $id = 'user-' . $userId;
            $this->migrator->add($id . '.share_bluesky', false);
        }
    }
};
