<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class Audio extends Model
{
    use HasFactory;
    protected $table = 'audio';
    public function owner()
    {
        return $this->belongsTo(User::class , 'user_id');
    }

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            $slug = Str::slug($model->title , '-' , null);
            if($count = $model->where('slug' , $slug)->get()->count()) {
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