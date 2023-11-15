<?php

namespace Scheduling\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpenDate extends Model
{
    use HasFactory;

    public function status()
    {
        return $this->belongsTo(OpenDateStatus::class);
    }
}
