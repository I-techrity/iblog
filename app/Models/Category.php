<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'taggable');
    }
    public function audios()
    {
        return $this->morphedByMany(Audio::class, 'taggable');
    }
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'taggable');
    }
}
