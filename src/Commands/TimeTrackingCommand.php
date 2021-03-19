<?php

namespace Arbitraer\TimeTracking\Commands;

use Illuminate\Console\Command;

class TimeTrackingCommand extends Command
{
    public $signature = 'laravel-time-tracking';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
