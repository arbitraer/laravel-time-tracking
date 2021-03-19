<?php

namespace Arbitraer\TimeTracking;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Arbitraer\TimeTracking\TimeTracking
 */
class TimeTrackingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-time-tracking';
    }
}
