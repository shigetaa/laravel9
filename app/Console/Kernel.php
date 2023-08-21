<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // 毎分
        //$schedule->command('app:sample-command')->everyMinute()->emailOutputTo('shige@cdrive.jp');
        // 毎時
        //$schedule->command('app:sample-command')->hourly();
        // 毎時 8分
        //$schedule->command('app:sample-command')->hourlyAt(8);
        // 毎日
        //$schedule->command('app:sample-command')->daily();
        // 毎日13時
        //$schedule->command('app:sample-command')->dailyAt('13:00');
        // 毎日3:15(cron表記)
        //$schedule->command('app:sample-command')->cron('15 3 * * *');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
