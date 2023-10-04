<?php

namespace Category\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function parent(){
        return $this->belongsTo(Category::class,'parent_id');
    }
    public function children(){
        return $this->hasMany(Category::class,'parent_id');
    }
    public function categoryOne(){
        return $this->hasOne(Category::class,'parent_id');
    }
    public function subcategoryOne(){
        return $this->belongsTo(Category::class,'parent_id');
    }
}
