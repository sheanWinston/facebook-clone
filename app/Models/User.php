<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get all of the following for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function following(): HasMany
    {
        return $this->hasMany(Friend::class, 'user_id', 'id');
    }

    /**
     * Get all of the followers for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function followers(): HasMany
    {
        return $this->hasMany(Friend::class, 'friend_id', 'id');
    }
}
