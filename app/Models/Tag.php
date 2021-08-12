<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    /**
     * Get all of the videos that are assigned this tag.
     */
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

    /* 
        get class name at runtime :
            $alias = $post->getMorphClass();
            $class = Relation::getMorphedModel($alias);
    */
}
