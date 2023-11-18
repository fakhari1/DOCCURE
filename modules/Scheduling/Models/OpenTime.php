<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class OpenTime extends Model
{
    use HasFactory;

    protected $table = 'open_times';

    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'date_id',
        'created_by',
        'status_id',
        'description',
    ];

    public function status()
    {
        return $this->belongsTo(OpenTimeStatus::class);
    }

    public function appointment()
    {
        return $this->hasOne(Appointment::class);
    }

    public function openDate()
    {
        return $this->belongsTo(OpenDate::class, 'date_id');
    }

    public function hasAppointment()
    {
        return $this->appointment()->exists();
    }
}
