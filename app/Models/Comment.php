<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function videos()
    {
        return $this->morphedByMany(Video::class, 'commentable');
    }
    public function audios()
    {
        return $this->morphedByMany(Audio::class, 'commentable');
    }
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'commentable');
    }
    public function owner()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
}
