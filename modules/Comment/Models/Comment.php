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
        'author_id',
        'status'
    ];

    protected $appends = [
        'last_answer',
        'status_badge'
    ];

    const STATUS_PENDING = 'pending';
    const STATUS_ACCEPTED = 'accepted';

    protected $statuses = [
        self::STATUS_ACCEPTED,
        self::STATUS_PENDING
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

    public function getStatusBadgeAttribute()
    {
        $className = $this->isAccepted() ? 'bg-success' : 'bg-warning';
        $statusName = trans($this->status);

        return "<span class='badge {$className}'>{$statusName}</span>";
    }

    public function isAccepted()
    {
        return $this->status == self::STATUS_ACCEPTED;
    }

    public function isAnswer()
    {
        return $this->parent_id != null;
    }

    public function scopeIsNotAnswer($query)
    {
        return $query->where('parent_id', null);
    }

    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING);
    }

    public function scopeAccepted($query)
    {
        return $query->where('status', self::STATUS_ACCEPTED);
    }

}
