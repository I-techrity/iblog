<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class Video extends Model
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
    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $slug = Str::slug($model->title , '-' , null);
            if($count = $model->where('slug' , $slug)->count()) {
                $slug .= '-' . $count ;
            }
            $model->slug = $slug;
             if(!$model->user_i) {
                 $model->user_id = Auth::user()->id;
            } 
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
