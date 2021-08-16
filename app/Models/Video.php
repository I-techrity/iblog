<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class Video extends Model
{
    use HasFactory;

    protected $appends = ['link'];
    public function getLinkAttribute() {
        return '/storage/'.json_decode($this->file)[0]->download_link;
    }
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
            if($count = $model->where('slug' , $slug)->count()) {
                $slug .= '-' . $count ;
            }
            $model->slug = $slug;
             if(!$model->user_id) {
                 $model->user_id = Auth::user()->id;
            } 
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
