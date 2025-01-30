<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        $schedule->command('queue:work', [
            '--queue' => 'default,import',
            '--max-jobs' => '30',
            '--stop-when-empty',
        ])->withoutOverlapping();

        $schedule->command('links:check')->everyTwoHours()->withoutOverlapping();

        if (config('backup.backup.enabled')) {
            $notificationsDisabled = config('backup.notifications.enabled') === false;

            $schedule->command('backup:clean', ['--disable-notifications' => $notificationsDisabled])
                ->daily()
                ->at(config('backup.backup.clean_hour'));

            $schedule->command('backup:run', ['--disable-notifications' => $notificationsDisabled])
                ->daily()
                ->at(config('backup.backup.backup_hour'));
        }
    }

    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');
    }
}
