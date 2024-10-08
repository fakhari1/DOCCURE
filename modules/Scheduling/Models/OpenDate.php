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

    protected $appends = [
        'is_holiday',
        'status_text'
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

    public function hasAppointment()
    {
        $count = 0;
        $this->openTimes()->each(function ($time) use (&$count) {
            if ($time->hasAppointment()) {
                $count++;
            }
        });

        return $count > 0;
    }

    public function getAvailableTimesCount()
    {
        $count = 0;
        $this->openTimes()->each(function ($time) use (&$count) {
            if (!$time->hasAppointment() && !$time->isDisabled()) {
                $count++;
            }
        });

        return $count;
    }

    public function getStatusTextAttribute()
    {
        if ($this->status->name == 'active') {
            return '<span class="badge bg-success">' . trans($this->status->name) . '</span>';
        } else {
            return '<span class="badge bg-danger">' . trans($this->status->name) . '</span>';
        }
    }

    public function isItClosed()
    {
        return $this->status_id == OpenDateStatus::where('name', OpenDateStatus::STATUS_INACTIVE)->first()->id;
    }

    public function closeMyTimes()
    {
        $this->openTimes()->each(function ($time) {
            $time->update([
                'status_id' => OpenTimeStatus::where('name', OpenTimeStatus::STATUS_INACTIVE)->first()->id
            ]);
        });
    }

    public function openMyTimes()
    {
        $this->openTimes()->each(function ($time) {
            $time->update([
                'status_id' => OpenTimeStatus::where('name', OpenTimeStatus::STATUS_ACTIVE)->first()->id
            ]);
        });
    }

    public function isHoliday()
    {
        return $this->status_id == OpenDateStatus::where('name', OpenDateStatus::STATUS_INACTIVE)->first()->id;
    }

    public function getIsHolidayAttribute()
    {
        return $this->isHoliday();
    }

}
