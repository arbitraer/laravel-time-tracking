<?php

namespace Arbitraer\TimeTracking\Traits;

use Arbitraer\TimeTracking\Models\Interval;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasTimeTracking
{
    public function intervals(): MorphMany
    {
        return $this->morphMany(
            Interval::class,
            'intervalable'
        );
    }

    public function startTimer(): void
    {
        $this->stopAllIntervals();
        $this->startInterval();
    }

    public function stopTimer(): void
    {
        $this->stopAllIntervals();
    }

    public function startInterval(): void
    {
        $this->intervals()->save(Interval::make());
    }

    public function stopAllIntervals(): void
    {
        $this->intervals()
            ->running()
            ->get()
            ->each(function ($interval) {
                $interval->stop();
            });
    }
}
