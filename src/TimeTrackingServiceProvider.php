<?php

namespace Arbitraer\TimeTracking;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Arbitraer\TimeTracking\Commands\TimeTrackingCommand;

class TimeTrackingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-time-tracking')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_time_tracking_table')
            ->hasCommand(TimeTrackingCommand::class);
    }
}
