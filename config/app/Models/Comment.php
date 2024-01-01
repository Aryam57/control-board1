<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content'];

    // علاقة التعليقات بالمستخدم (Many-to-One)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // علاقة التعليقات بالمنشور (Many-to-One)
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}

