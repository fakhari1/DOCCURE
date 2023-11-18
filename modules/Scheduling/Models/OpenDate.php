<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'duration',
        'morning_start_time',
        'morning_end_time',
        'evening_start_time',
        'evening_end_time',
        'is_holiday',
        'status_id',
    ];

    public function status()
    {
        return $this->belongsTo(OpenDateStatus::class);
    }

    public function openTimes()
    {
        return $this->hasMany(OpenTime::class, 'date_id', 'id');
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function getAvailableAppointmentsCount()
    {
        $count = 0;
        $this->openTimes()->each(function ($time) use (&$count) {
            if (!$time->hasAppointment()) {
                $count++;
            }
        });

        return $count;
    }

}
