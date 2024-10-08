<?php

namespace User\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Comment\Models\Comment;
use File\Models\Uploader;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use RolePermission\Models\Role;
use Scheduling\Models\Appointment;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    protected $keyType = 'string';
    public $incrementing = false;

    public static function booted() {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();

            $model->assignRole(Role::ROLE_PATIENT);
        });
    }

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'mobile',
        'mobile_verified_at',
        'national_code',
        'job'
    ];

    protected $appends = [
        'name'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'mobile_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);

    }

    public function otps()
    {
        return $this->hasMany(Otp::class, 'user_id', 'id');
    }

    public function isAdmin()
    {
        return Auth::user()->hasRole(Role::ROLE_SUPER_ADMIN);
    }

    public function isUser() {
        return Auth::user()->hasRole(Role::ROLE_PATIENT);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id', 'id');
    }

    public function scopeMyAppointments()
    {
        return Auth::user()->appointments()->get();
    }

    public function getNameAttribute(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function hasCompletedProfile()
    {
        if ($this->first_name != null and
            $this->last_name != null and
            $this->national_code != null
        ) {
            return true;
        }
        return false;
    }

//    public function scopeMyExpiredAppointments($query)
//    {
//        $query->appointments()->where('created_at', '<', Carbon::now()->format('Y-m-d H:i:s'))->get();
//    }
}
