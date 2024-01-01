<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content'];

    // علاقة المنشورات بالمستخدم (Many-to-One)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // علاقة المنشورات بالتعليقات (One-to-Many)
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

