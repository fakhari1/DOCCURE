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
        if ($this->status->name == 'active') {
            return '<span class="badge bg-success">' . trans($this->status->name) . '</span>';
        } else {
            return '<span class="badge bg-danger">' . trans($this->status->name) . '</span>';
        }
    }
}
