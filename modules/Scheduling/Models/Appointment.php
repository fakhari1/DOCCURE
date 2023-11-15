<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class Appointment extends Model
{
    use HasFactory;


    public function status()
    {
        return $this->belongsTo(AppointmentStatus::class);
    }

    public function openTime()
    {
        return $this->belongsTo(OpenTime::class, 'open_time_id');
    }

    public function openDate()
    {
        return $this->belongsTo(OpenDate::class, 'open_date_id');
    }
}
