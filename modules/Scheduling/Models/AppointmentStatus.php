<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class AppointmentStatus extends Model
{
    use HasFactory;

    protected $table = 'appointment_statuses';

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    const STATUS_AVAILABLE = 'available';

    const STATUS_CANCELED = 'canceled';
    public static $statuses = [
        self::STATUS_AVAILABLE,
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE,
        self::STATUS_CANCELED,

    ];
}
