<?php

namespace User\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Comment\Models\Comment;
use File\Models\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use RolePermission\Models\Permission;
use RolePermission\Models\Role;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function file()
    {
        return $this->hasOne(File::class, 'profile_id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'author_id');

    }

    public function isAdmin()
    {
        return auth()->user()->hasRole(Role::ROLE_SUPER_ADMIN);
    }
}
