<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        foreach (DB::table('users')->pluck('id') as $userId) {
            $id = 'user-' . $userId;
            $this->migrator->delete($id . '.shareAdd_bluesky');
            $this->migrator->add($id . '.share_bluesky', false);
        }
    }
};
