<?php

namespace Scheduling\Models;

use Carbon\Carbon;
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

    protected $appends = [
        'status_text',
        'start_time_text',
        'end_time_text',
        'is_available_text',
        'is_available',
        'has_appointment',
        'is_disabled',
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
        return $this->appointment()->where('status_id', '=', OpenTimeStatus::findOrFail(1)->id)->exists();
    }

    public function getStatusTextAttribute()
    {
        if ($this->status->name == 'active') {
            return '<span class="badge bg-success">' . trans($this->status->name) . '</span>';
        } else {
            return '<span class="badge bg-danger">' . trans($this->status->name) . '</span>';
        }
    }

    public function getStartTimeTextAttribute()
    {
        return '<span class="badge bg-white text-success border border-1 border-success" style="width: 80px">' . Carbon::parse($this->start_time)->format('H:i') . '</span>';
    }

    public function getEndTimeTextAttribute()
    {
        return '<span class="badge bg-white text-danger border border-1 border-danger" style="width: 80px">' . Carbon::parse($this->end_time)->format('H:i') . '</span>';
    }

    public function isDisabled()
    {
        return $this->status_id == 2;
    }

    public function getIsAvailableTextAttribute()
    {
        if ($this->isDisabled())
            return '<span class="badge bg-danger" style="width: 80px">' . 'غیر فعال' . '</span>';

        if ($this->hasAppointment())
            return '<span class="badge bg-warning" style="width: 80px">' . 'رزرو' . '</span>';
        else
            return '<span class="badge bg-success" style="width: 80px">' . 'آزاد' . '</span>';
    }

    public function getIsDisabledAttribute()
    {
        return $this->isDisabled();
    }

    public function getHasAppointmentAttribute()
    {
        return $this->hasAppointment();
    }

    public function getIsAvailableAttribute()
    {
        return !$this->hasAppointment() and !$this->isDisabled();
    }
}
