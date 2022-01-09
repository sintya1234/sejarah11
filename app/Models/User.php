<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'school',
        'city',
        'birthyear',
        'photo',
        'created_at',
        'email_verified_at',
        'is_login',
        'is_active'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Sej11_User_Levels()
    {
        return $this->hasMany(Sej11_User_Level::class,'user_id','id');
    }

    public function sej11_leaderboard()
    {
        return $this->belongsTo(sej11_leaderboard::class,'user_id','id');
    }
    public function sej11__levels()
    {
        return $this->belongsToMany(Sej11_Level::class,'sej11_user_levels','user_id','sej11__level_id');
    }
}
