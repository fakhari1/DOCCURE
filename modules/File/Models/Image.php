<?php

namespace File\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Services\Models\Service;
use User\Models\User;

class Image extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function user(){
        return $this->belongsTo(User::class,'profile_id');
    }
    public function service(){
        return $this->belongsTo(Service::class,'banner_id');
    }
}
