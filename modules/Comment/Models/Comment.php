<?php

namespace Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use User\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'parent_id',
        'author_id'
    ];

    protected $appends = [
        'last_answer'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function answers()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id');
    }

    public function hasAnswer()
    {
        return count($this->answers) > 0;
    }

    public function getLastAnswerAttribute()
    {
        return $this->answers()?->latest()->first();
    }

    public function scopeIsNotAnswer($query)
    {
        return $query->where('parent_id', null);
    }
}
