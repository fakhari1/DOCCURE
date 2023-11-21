<?php

namespace User\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Comment\Models\Comment;
use File\Models\Uploader;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;
use RolePermission\Models\Permission;
use RolePermission\Models\Role;
use Scheduling\Models\Appointment;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'mobile_verified_at',
        'national_code',
        'job'
    ];

    protected $appends = [
        'full_name'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'mobile_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function comment()
    {
        return $this->hasMany(Comment::class, 'author_id');

    }

    public function isAdmin()
    {
        return auth()->user()->hasRole(Role::ROLE_SUPER_ADMIN);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id', 'id');
    }

    public function scopeMyAppointments()
    {
        return Auth::user()->appointments()->get();
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

//    public function scopeMyExpiredAppointments($query)
//    {
//        $query->appointments()->where('created_at', '<', Carbon::now()->format('Y-m-d H:i:s'))->get();
//    }
}
