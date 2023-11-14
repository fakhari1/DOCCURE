<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class OpenTime extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(OpenTimesStatus::class);
    }
}
