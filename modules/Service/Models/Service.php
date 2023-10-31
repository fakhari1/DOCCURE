<?php

namespace Services\Models;

use File\Models\Uploader;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function image(){
        return $this->hasOne(Uploader::class,'banner_id');
    }
}
