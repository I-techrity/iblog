<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class Article extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $slug = Str::slug($model->title , '-' , null);
            if($model->slug != $slug) {
            
                if($count = $model->where('slug' , $slug)->get()->count()) {
                    $slug .= '-' . $count ;
                }
                $model->slug = $slug;
            }
            $model->excerpt = Str::limit( strip_tags($model->body), 120 , '...');
            
            if(! $model->user_id) {
                 $model->user_id = Auth::user()->id;
            } 
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function scopeOwner($query)
    {
        return Auth::user()->hasRole(['admin' , 'super']) ? $query : $query->where('user_id' , Auth::id()) ;
    }

    // full text scope function :
    public function scopeSearch($query, $q)
    {
        return $query->whereRaw(
            // "MATCH(value) AGAINST(?  WITH QUERY EXPANSION)",
            // "MATCH(value , answer) AGAINST(?  IN NATURAL LANGUAGE MODE WITH QUERY EXPANSION)", 
            "MATCH(title , body) AGAINST(? WITH QUERY EXPANSION)",
            array($q)
        );
    }
}
