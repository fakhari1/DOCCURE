<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class OpenDateStatus extends Model
{
    use HasFactory;

    protected $table = 'open_date_statuses';

    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    const STATUS_NOT_FINALIZED = 'not finalized';
    const STATUS_FINALIZED = 'finalized';

    public static $statuses = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE,
    ];
}
