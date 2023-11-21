<?php

namespace Scheduling\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'open_date_id',
        'open_time_id',
        'user_id',
        'status_id',
    ];

    protected $appends = [
        'status_text'
    ];

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

    public function getStatusTextAttribute()
    {
        $className = $this->status_id == 1 ? "bg-success" : "bg-danger";
        $text = $this->status_id == 1 ? "فعال" : "غیرفعال ";

        return "<a href='/dashboard/doctor/open-dates/times/appointments/" . $this->id . "/update-status' class='badge " . $className ."'>" . $text . "</a>";
    }
}
