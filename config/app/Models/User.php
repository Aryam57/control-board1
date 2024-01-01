<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    // علاقة المستخدمين بالمنشورات (One-to-Many)
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // علاقة المستخدمين بالتعليقات (One-to-Many)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
