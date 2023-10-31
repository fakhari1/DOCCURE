<?php

namespace Otp\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{
    protected $table = 'otps';
    use HasFactory;
}
