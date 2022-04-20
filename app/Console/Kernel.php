<?php

namespace App\Console;

use App\Console\Commands\GetPrice;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{

    protected $commands = [
        Commands\GetPrice::class,
    ];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('GetPrice')->cron('*/15 * * * *');
    }


    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
