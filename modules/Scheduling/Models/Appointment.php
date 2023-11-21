<?php

namespace Scheduling\Models;

use Carbon\Carbon;
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

    public function time()
    {
        return $this->belongsTo(OpenTime::class, 'open_time_id');
    }

    public function date()
    {
        return $this->belongsTo(OpenDate::class, 'open_date_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//    public function scopeIsExpired($query)
//    {
//        return $query->time()->where('end_time', '<', Carbon::now()->format('Y-m-d H:i:s'))->get();
//    }
}
