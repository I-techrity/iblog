<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'categorizable');
    }
    public function audios()
    {
        return $this->morphedByMany(Audio::class, 'categorizable');
    }
    public function articles()
    {
        return $this->morphedByMany(Article::class, 'categorizable');
    }
}
