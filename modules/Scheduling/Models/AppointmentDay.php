<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentDay extends Model
{
    use HasFactory;

    static $durations = [
        10,
        15,
        20,
        30,
        45,
        60
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
}
