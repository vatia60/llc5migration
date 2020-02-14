<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'title', 'content', 'thumbnail_path', 'status'
    ];
}
