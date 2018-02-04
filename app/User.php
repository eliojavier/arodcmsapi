<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function roleNames()
    {
        return $this->belongsToMany(Role::class)->select('name');
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function scopeFindUserByToken($query, $id)
    {
        return $query->findOrFail($id);
    }

    public function scopeFindUserByEmail($query, $email)
    {
        return $query->where('email', $email)->where('status', 'active')->first();
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}
