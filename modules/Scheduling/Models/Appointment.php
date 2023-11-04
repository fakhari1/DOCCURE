<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class Appointment extends Model
{
    use HasFactory;

    public function day()
    {
        return $this->belongsTo(AppointmentDay::class, 'appointment_day_id');
    }

    public function user()
    {
        return $this->hasOneThrough(User::class, 'appointment_user');
    }

    public function isReserved()
    {
        return $this->user()->count() > 0;
    }
}
