<?php

namespace Comment\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class Comment extends Model
{
 use HasFactory;
 protected $guarded=['id'];
 public function user(){
     return $this->belongsTo(User::class,'author_id');
 }
}
