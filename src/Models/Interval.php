<?php

namespace Arbitraer\TimeTracking\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Interval extends Model
{

    protected $guarded = ['id'];

    protected static function boot()
    {
        static::creating(function ($model) {
            $model->started_at = now();
        });

        parent::boot();
    }

    public function intervalable(): MorphTo
    {
        return $this->morphTo();
    }

    public function scopeRunning($query)
    {
        return $query
            ->whereNotNull('started_at')
            ->whereNull('stopped_at');
    }

    // public function getTable()
    // {
    //     return config('time-tracking.table_names.intervals', parent::getTable());
    // }

    public function stop(): void
    {
        $this->stopped_at = now();
        $this->save();
    }
}
