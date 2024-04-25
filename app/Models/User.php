<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable //implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //public $table = 'users';
    //const PATH = 'users';
    protected $fillable = [
        'facebook_id',
        'google_id',
        'consent',
        'name',
        'employees_count',
        'website_link',
        'role',
        'email',
        'password',
        'contact',
        'email_verified_at',
        'otp'
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
    ];

    public function academics()
    {
        return $this->hasMany(Academic::class);
    }

    public function skills()
    {
        return $this->hasMany(UserSkill::class);
    }

    public function users_skills()
    {
        return $this->belongsToMany(Skill::class,'user_skills');
    }
    public function users_levels()
    {
        return $this->belongsToMany(Level::class,'user_skills');
    }

    public function works()
    {
        return $this->hasMany(Experience::class, 'user_id', 'id');
    }
}
